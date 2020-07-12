<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{


    public function Login()
    {
       // print_r(\request()->all());

        $uname=\request()->username;
        $pass=md5(\request()->password);
        $req=['email'=>$uname,
            'password'=>$pass
        ];
        $vdate=Carbon::now();
       // date_add($vdate,date_interval_create_from_date_string("1 days"));
       // echo date_format($date,"Y-m-d");
        /*$res=DB::table('supplier')
            ->where($req)
            ->where('validity_date','>=',DB::raw(date_format($vdate,"Y-m-d")))
            ->first();*/

        $qry="SELECT * FROM `supplier`
              WHERE  email='$uname' and password='$pass'  and
              `validity_date` >='".date_format($vdate,"Y-m-d")."'";
        $res=DB::select(DB::raw($qry));

        /*echo $qry;
        print_r($res);exit;*/


        if($res)
        {

            Session::put("userid",$res[0]->id);
            return Redirect::to("countrylist");
        }
        else
        {

            return Redirect::to("clientlogin");
        }
    }

    public static function getSupplier()
        {
            $id=Session::get("userid");
            return DB::table('supplier')->where('id',$id)->first();
        }

        public function ClientLogOut()
        {
            Session::flush();
            return Redirect::to("/");
        }



}
