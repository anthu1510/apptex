<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Node;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;
use Psy\Util\Json;

class NodeController extends Controller
{

    public function Create()
    {
        $catagories=DB::table("catagory")->get();
        $countries=DB::table("country")->get();


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

    public function NodeEdit()
    {
        $id = \request()->id;
        $res = DB::table('buyers')->where('id', $id)->first();
        echo json_encode($res);
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

    private function FlshMessage($message)
    {
        return Redirect::back()->with('message', $message);
    }


}


