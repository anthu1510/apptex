<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $country=DB::table('country')
            ->where('status','active')
            ->orderBy('priority')
            ->get();
       $country_count= count($country);
        $data=['country'=>$country,
            'country_count'=>$country_count
            ];


        return view("client.index")->with($data);
    }

    public function listCatagory()

    {
        $id=\request()->id;
        $country_id=$id;

        $qry="select
                    cat.id as catid,
                    count(cat.catagory_desc) as count,
                   cat.catagory_desc as catagory
            FROM buyers b
                     JOIN country c ON b.country_id = c.id
                     JOIN catagory cat ON find_in_set(cat.id, b.catagory_id )
                    WHERE c.id=$id
                    GROUP BY cat.catagory_desc,catid";

        $catagory=DB::select(DB::raw($qry));
        $data=['catagory'=>$catagory,
                'country_id'=>$country_id
                ];

        return view("client.list_catagory")->with($data);

    }

    public function listBuyer()
    {
       return view('client.list_buyer');
    }


}
