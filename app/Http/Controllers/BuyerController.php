<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BuyerController extends Controller
{
    public function Create()
    {
        $catagories=DB::table("catagory")
            ->get();
        $countries=DB::table("country")
            ->where('status','active')
            ->orderBy("priority")
            ->get();


        $data=['catagories'=>$catagories,
            'countries'=>$countries];



        return view('dashboard.node.new')->with($data);
    }
    public function save2()
    {
        $req = \request()->all();

        echo "<pre>";
//        print_r($req);exit;
        $catagory=implode(',',$req['catagory']);

        $data=[
            'country_id'=>$req['country'] ,
            'catagory_id'=>$catagory,
            'buyer_name'=>$req['buyer_name'] ,
            'desc'=>$req['product_desc'] ,
            'contact_person'=>$req['contact_person'] ,
            'contact_address'=>$req['contact_address'] ,
            'phone'=>$req['phone'] ,
            'fax'=>$req['fax'] ,
            'email'=>$req['email'] ,
            'website'=> $req['website']
        ];



        //print_r($node_data)
        $res = DB::table('buyers')->insertGetId($data);





        if ($res) {

            $message = 'message|Node saved  Successfull...';


        } else {
            $message = 'error|Node not saved Error...';
        }

        return $this->FlshMessage($message);


    }

    public function list()
    {
        $catagories=DB::table("catagory")->get();
        $countries=DB::table("country")->get();


        $data=['catagories'=>$catagories,
            'countries'=>$countries];
        return view('dashboard.node.list')->with($data);
    }
    public function listContact()
    {
            $catagories=DB::table("catagory")->get();
            $countries=DB::table("country")->get();


        $data=['catagories'=>$catagories,
            'countries'=>$countries];
        return view('dashboard.contact.list')->with($data);
    }

    public function listSupplier()
    {

        return view('dashboard.supplier.list');
    }

    public function NodeServerSide()
    {
        //$res = DB::select(DB::raw("SELECT * FROM `node`"));
        $res = DB::select(DB::raw("select b.id as id,
                                               c.country_name as country,
                                               GROUP_CONCAT(cat.catagory_desc) as catagory,
                                               b.buyer_name as buyername,
                                               b.desc as product_desc,
                                               b.contact_person as contct_person,
                                               b.phone as phone,
                                               b.fax as fax
                                        FROM buyers b
                                            JOIN country c ON b.country_id = c.id
                                            JOIN catagory cat ON find_in_set(cat.id, b.catagory_id )
                                            GROUP BY b.id,c.country_name,buyer_name,b.desc,b.contact_person,b.phone,b.fax

                                            "));
        return datatables()->of($res)->toJson();
    }
    public function BuyerServerSide()
    {
        //$res = DB::select(DB::raw("SELECT * FROM `node`"));
        $res = DB::select(DB::raw("select b.id as id,
                                               c.country_name as country,
                                               GROUP_CONCAT(cat.catagory_desc) as catagory,
                                               b.buyer_name as buyername,
                                               b.desc as product_desc,
                                               b.contact_person as contct_person,
                                               b.phone as phone,
                                               b.fax as fax
                                        FROM buyers b
                                            JOIN country c ON b.country_id = c.id
                                            JOIN catagory cat ON find_in_set(cat.id, b.catagory_id )
                                            GROUP BY b.id,c.country_name,buyer_name,b.desc,b.contact_person,b.phone,b.fax

                                            "));
        return datatables()->of($res)->toJson();
    }
    public function ContactServerSide()
    {
        //$res = DB::select(DB::raw("SELECT * FROM `node`"));
        $res = DB::select(DB::raw("select * FROM enquiry_form"));
        return datatables()->of($res)->toJson();
    }
    public function SupplierServerSide()
    {
        //$res = DB::select(DB::raw("SELECT * FROM `node`"));
        $res = DB::select(DB::raw("select * FROM supplier"));
        return datatables()->of($res)->toJson();
    }



    public function BuyerServerSideFilter()
    {
        //$res = DB::select(DB::raw("SELECT * FROM `node`"));

        $country_id=\request()->cid;
        $cat_id=\request()->catid;

        if($country_id && $cat_id)
        {
            $qry="select b.id as id, c.country_name as country,
                           GROUP_CONCAT(cat.catagory_desc) as catagory,
                           b.buyer_name as buyername,
                           b.desc as product_desc,
                           b.contact_person as contct_person,
                           b.phone as phone,
                           b.fax as fax,
                           b.email as email
                    FROM buyers b
                             JOIN country c ON b.country_id = c.id
                             JOIN catagory cat ON find_in_set(cat.id, b.catagory_id )
                    WHERE c.id=$country_id and find_in_set($cat_id,b.catagory_id)
                    GROUP BY b.id,c.country_name,buyer_name,b.desc,b.contact_person,b.phone,b.fax,b.email";
        }else
        {
            $qry="select b.id as id,
                                                       c.country_name as country,
                                                       GROUP_CONCAT(cat.catagory_desc) as catagory,
                                                       b.buyer_name as buyername,
                                                       b.desc as product_desc,
                                                       b.contact_person as contct_person,
                                                       b.phone as phone,
                                                       b.fax as fax,
                                                       b.email as email
                                                FROM buyers b
                                                    JOIN country c ON b.country_id = c.id
                                                    JOIN catagory cat ON find_in_set(cat.id, b.catagory_id )
                                                    GROUP BY b.id,c.country_name,buyer_name,b.desc,b.contact_person,b.phone,b.fax,b.email

                                                    ";
        }


        $res = DB::select(DB::raw($qry));
        return datatables()->of($res)->toJson();
    }

    public function viewBuyer()
    {
        $req=\request()->all();
        $id=$req['id'];
        $qry="SELECT
                        b.id              AS id,
                       c.country_name    AS country,
                       b.buyer_name      AS buyername,
                       b.desc            AS product_desc,
                       b.contact_address AS address,
                       b.contact_person  AS contct_person,
                       b.phone           AS phone,
                       b.fax             AS fax,
                       b.email AS email,
                       b.website         AS website
                FROM buyers b
                         JOIN country c
                              ON b.country_id = c.id
                WHERE b.id = $id";

        $res = DB::select(DB::raw($qry));
        echo json_encode($res[0]);
    }

    public function NodeEdit()
    {
        $id = \request()->id;
        $res = DB::table('buyers')->where('id', $id)->first();
        echo json_encode($res);
    }

    public function ContactDetail()
    {
        $id = \request()->id;
        $res = DB::table('enquiry_form')->where('id', $id)->first();
        echo json_encode($res);
    }
    public function DeleteContact()
    {
        $id = \request()->id;
        $res = DB::table('enquiry_form')->where('id', $id)->delete();
        echo 1;
    }
    public function SupplierDetail()
    {
        $id = \request()->id;

        $qry="SELECT sup.id,
       sup.name,
       sup.company_name,
       sup.email,
       sup.business_desc,
       sup.address,
       sup.place,
       sup.state,
       sup.country,
       sup.phone,
       sup.catagory_id,
       group_concat(c.catagory_desc) AS catagory,
       sup.status,
       sup.created_at,
       sup.updated_at,
       sup.validity_date
FROM supplier sup
         JOIN catagory c ON find_in_set(c.id, sup.catagory_id)
WHERE sup.id = $id
GROUP BY sup.id,
         sup.name,
         sup.company_name,
         sup.email,
         sup.business_desc,
         sup.address,
         sup.place,
         sup.state,
         sup.country,
         sup.phone,
         sup.catagory_id,
         sup.status,
         sup.created_at,
         sup.updated_at,
         sup.validity_date";


        $res = DB::select(DB::raw($qry));
        echo json_encode($res[0]);
    }
    public function DeleteSupplier()
    {
        $id = \request()->id;
        $res = DB::table('supplier')->where('id', $id)->delete();
        echo 1;
    }
    public function BonusDate()
    {
        $bonusdays=env('BONUS_DAYS');
        $id = \request()->id;
        $data=[
            'validity_date'=>date_add(Carbon::now(),date_interval_create_from_date_string("$bonusdays days")),
            'status'=>'active',

        ];
        $res = DB::table('supplier')->where('id', $id)->update($data);
        if($res)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }

    }

    public function UpdateSave()
    {
        $req=\request()->all();
        $id = $req['hbuyer_id'];

        $catagory=implode(',',$req['catagory']);

        $data=[
            'country_id'=>$req['country'] ,
            'catagory_id'=>$catagory,
            'buyer_name'=>$req['buyer_name'] ,
            'desc'=>$req['product_desc'] ,
            'contact_person'=>$req['contact_person'] ,
            'contact_address'=>$req['contact_address'] ,
            'phone'=>$req['phone'] ,
            'fax'=>$req['fax'] ,
            'email'=>$req['email'] ,
            'website'=> $req['website']
        ];


        $res = DB::table('buyers')->where('id', $id)->update($data);


        if ($res == 1) {
            $message = 'message|Node Updaterd  Successfull...';

        } else {
            $message = 'error|Node Not Updated';
        }

        return $this->FlshMessage($message);

    }

    public function ValidityExtent()
    {
        $req=\request()->all();
        $id=$req['sup-id'];
        $day=$req['ex-days'];
        //print_r($req);
        $qry=" UPDATE supplier SET validity_date=DATE_ADD(validity_date, INTERVAL $day DAY) WHERE id=$id ";
        DB::select(DB::raw($qry));
        return \redirect('dashboard/buyer/supplierlist');

    }

    private function FlshMessage($message)
    {
        return Redirect::back()->with('message', $message);
    }
}
