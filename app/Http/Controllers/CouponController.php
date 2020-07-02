<?php

namespace App\Http\Controllers;

use App\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;

class CouponController extends Controller
{
    //

    public function index()
    {
        return view('dashboard.coupon.index');
    }

    public function list()
    {
        return view('dashboard.coupon.list');
    }
    public function listActive()
    {
        return view('dashboard.coupon.list_active');
    }

    public function save(Request $request)
    {
        $coupon=new Coupon();
        $no_of_coupon=$request->input('ncoupon');
        $genid=$coupon->getGenId();
        for($i=1;$i<=$no_of_coupon;$i++)
        {
            $data=[
                'gen_id'=>$genid,
                'code'=>$coupon->getId(),
                'coupon_code'=>$coupon->getCoupon(),
                'c_date'=> Carbon::now(),
                'name'=>$request->input('name'),
                'mobile'=>$request->input('mobile'),
                'email'=>$request->input('email'),
                'comments'=>$request->input('comments'),
                'status'=>'active'
            ];
            $res=     DB::table('coupon')->insert($data);
        }

        if($res == 1){
            $message = 'message|Coupon Generated  Successfull...';

        } else {
            $message = 'error|Coupon Generation
             Error...';
        }

        return $this->FlshMessage($message);

    }


    public function CouponServerSide()
    {
        $res = DB::select(DB::raw("SELECT id,
                                                gen_id,
                                                code,
                                                coupon_code,

                                                DATE_FORMAT( `c_date`, '%d-%m-%Y') as 'c_date',
                                                name,
                                                mobile,
                                                email,
                                                comments,
                                                status FROM `coupon`"));
        return datatables()->of($res)->toJson();
    }
    public function CouponActiveServerSide()
    {
        $res = DB::select(DB::raw("SELECT id,
                                                gen_id,
                                                code,
                                                coupon_code,

                                                DATE_FORMAT( `c_date`, '%d-%m-%Y') as 'c_date',
                                                name,
                                                mobile,
                                                email,
                                                comments,
                                                status FROM `coupon` where status='active'"));
        return datatables()->of($res)->toJson();
    }

    public function CouponDelete()
    {

        $id = \request()->id;

        $res =DB::table('coupon')->where('id', $id)->delete();
        echo $res;
    }

    public function CouponDeactivate()
    {
        $req = \request()->all();
        $id = $req['id'];
        $data=['status'=>'inactive'];
        $res = DB::table('coupon')->where('id', $id)->update($data);
    }
    public function CouponActivate()
    {
        $req = \request()->all();
        $id = $req['id'];
        $data=['status'=>'active'];
        $res = DB::table('coupon')->where('id', $id)->update($data);
    }

    public function CouponEdit()
    {
        $id = \request()->id;
        $res = DB::table('coupon')->where('id', $id)->first();
        echo json_encode($res);
    }


    public function UpdateSave(Request $request)
    {
        $id=$request->input('id');
            $data=[

                'name'=>$request->input('name'),
                'mobile'=>$request->input('mobile'),
                'email'=>$request->input('email'),
                'comments'=>$request->input('comments')

            ];




            $res=     DB::table('coupon')->where('id',$id)->update($data);


        if($res == 1){
            $message = 'message|Coupon Updaterd  Successfull...';

        } else {
            $message = 'error|Coupon Not Updated';
        }

        return $this->FlshMessage($message);

    }







    // Display Alert Message

    private function FlshMessage($message)
    {
        return Redirect::back()->with('message', $message);
    }

    public function displayAlert()
    {
        if (Session::has('message')) {
            list($type, $message) = explode('|', Session::get('message'));

            $type = $type == 'error' ? 'danger' : 'success';
            $close = '<button type="button" class="close" data-dismiss="alert">&times;</button>';
            //return sprintf('<div class="alert alert-'.$type.'">%s</div>', $type, $message);
            //return '<div class="alert alert-'.$type.'">'.$message.'</div>';
            return new HtmlString('<div class="alert alert-dismissible alert-'.$type.'">'.$close.$message.'</div>');
        }

        return '';
    }


}
