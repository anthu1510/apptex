<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

use Razorpay\Api\Errors\SignatureVerificationError;
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

    public function Signup()
    {
        $catagory=DB::table('catagory')->get();
        $data=['catagory'=>$catagory];
        return view('client.signup')->with($data);
    }
    public function SignupSave()
    {

        $displayCurrency="INR";
        $keyId=env('RAZORPAY_KEY');
        $secret=env('RAZORPAY_SECRET');
        $amount=env('RAZORPAY_AMOUNT');

   /*     $keyId='rzp_live_Z9mdhiNJrjZmkv';
        $secret='KgG3QGlFQYIOBjZtEi50N5w1';*/
        $req=\request()->all();
      //  echo "<pre>";
      //  print_r($req);

        $catagory=implode(',',$req['catagory']);
        $password=md5($req['inputPassword']);

        $data_sup=[
            'name'=>$req['name'] ,
            'company_name'=>$req['companyname'] ,
            'email'=>$req['email'] ,
            'password'=>$password ,
            'business_desc'=>$req['businessdesc'] ,
            'address'=>$req['address'] ,
            'place'=>$req['place'] ,
            'state'=>$req['state'] ,
            'country'=>$req['country'] ,
            'phone'=>$req['phone'] ,
            'catagory_id'=>$catagory ,
            'status'=>'inactive'
            ];


        $id=DB::table('supplier')->insertGetId($data_sup);
        if ($id) {
            $datarecipt = ['sup_id' => $id,
                'amount' => $amount,
                 ];

            $receipt_id = DB::table('receipt')->insertGetId($datarecipt);

            $api = new Api($keyId, $secret);

            $order = $api->order->create(array(
                    'receipt' => $receipt_id,
                    'amount' => $amount * 100,
                    'payment_capture' => 1,
                    'currency' => 'INR'
                )
            );

            $razorpayOrderId = $order['id'];
            Session::put('razorpay_order_id', $razorpayOrderId);

            $datatrans=['sup_id'=>$id,
                        'razorpay_order_id'=>$razorpayOrderId];

           $trans_id= DB::table('transaction')->insertGetId($datatrans);

            if ($displayCurrency !== 'INR')
            {
                $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
                $exchange = json_decode(file_get_contents($url), true);

                $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
            }

            $data = [
                "key"               => $keyId,
                "amount"            => $amount,
                "name"              => $data_sup['name'],
                "description"       => "Apptex Paid member",
                "image"             => "https://apptex.attractsoftware.com/assets/images/logo/logo.png",
                "prefill"           => [
                    "name"              => $data_sup['name'],
                    "email"             => $data_sup['email'],
                    "contact"           => $data_sup['phone'],
                ],
                "notes"             => [
                    "address"           => $data_sup['address'],
                    "merchant_order_id" => $receipt_id,
                ],
                "theme"             => [
                    "color"             => "#F37254"
                ],
                "order_id"          => $razorpayOrderId,
            ];

            if ($displayCurrency !== 'INR')
            {
                $data['display_currency']  = $displayCurrency;
                $data['display_amount']    = $displayAmount;
            }


            $json = json_encode($data);

           // print_r($json);

            $val=['data'=>$data,
                'displayCurrency'=>$displayCurrency
                ];

            return view('client.payamount')->with($val);


        }


    }

    public function PaymentSuccess()
    {
        /*$keyId='rzp_live_Z9mdhiNJrjZmkv';
        $secret='KgG3QGlFQYIOBjZtEi50N5w1';*/

        $keyId=env('RAZORPAY_KEY');
        $secret=env('RAZORPAY_SECRET');
        $success = true;
        $error = "Payment Failed";

       /* $razerpay_order_id='order_FA0moj2KlcFCMU';
        $razorpay_payment_id="pay_FA0n4aZUJn5EMQ";
        $razorpay_signature="60e590badf68a7b34111783ab2b6c656688580117dc6f7017b00184f12c9c08c";

        $api = new Api($keyId, $secret);


            $api = new Api($keyId, $secret);


           try
            {
                // Please note that the razorpay order ID must
                // come from a trusted source (session here, but
                // could be database or something else)
                $attributes = array(
                    'razorpay_order_id' => $razerpay_order_id,
                    'razorpay_payment_id' => $razorpay_payment_id,
                    'razorpay_signature' => $razorpay_signature
                );

                $api->utility->verifyPaymentSignature($attributes);
            }
            catch(SignatureVerificationError $e)
            {
                $success = false;
                $error = 'Razorpay Error : ' . $e->getMessage();
            }*/


       if (empty($_POST['razorpay_payment_id']) === false)
        {
            $api = new Api($keyId, $secret);
            $razerpay_order_id=Session::get('razorpay_order_id' );
            $razorpay_payment_id= $_POST['razorpay_payment_id'];
            $razorpay_signature=$_POST['razorpay_signature'];
            try
            {
                // Please note that the razorpay order ID must
                // come from a trusted source (session here, but
                // could be database or something else)
                $attributes = array(
                    'razorpay_order_id' => $razerpay_order_id,
                    'razorpay_payment_id' => $razorpay_payment_id,
                    'razorpay_signature' => $razorpay_signature
                );

                $api->utility->verifyPaymentSignature($attributes);
            }
            catch(SignatureVerificationError $e)
            {
                $success = false;
                $error = 'Razorpay Error : ' . $e->getMessage();
            }
        }



        if ($success === true)
        {

            $rpoid=$razerpay_order_id;
            $ras=DB::table('transaction')->where('razorpay_order_id',$rpoid)->first();
            $sup_id=$ras->sup_id;
            $start_date=$ras->trans_date;


            $start_date=date_create($start_date );
            $start_dates = $start_date->format('Y-m-d');  // string convertion
            date_add($start_date,date_interval_create_from_date_string("1 months"));
            $validity_date= date_format($start_date,"Y-m-d");

            $upd_trans=[
                'shopping_order_id' => $razerpay_order_id,
                'razorpay_payment_id' => $razorpay_payment_id,
                'razorpay_signature' => $razorpay_signature,
                'status'=>'success'
            ];

            DB::table('transaction')->where('razorpay_order_id',$razerpay_order_id)->update($upd_trans);


            $upd_data=[
                'validity_date'=>$validity_date
            ];

            DB::table('supplier')->where('id',$sup_id)->update($upd_data);
            $supplier= DB::table('supplier')->where('id',$sup_id)->first();

        }
        else
        {
            $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
        }

     $ret_data=[
            'supplier'=>$supplier,
            'order_id'=>$rpoid,
            'start_date'=>$start_dates  ,
            'validity_date'=>$validity_date,
             'razorpay_order_id' => $razerpay_order_id,
             'razorpay_payment_id' => $razorpay_payment_id,
             'razorpay_signature' => $razorpay_signature

        ];
        //echo "<pre>";
        //print_r($ret_data);exit;

          return view('client.payment_success')->with($ret_data);
    }

    public function Test()
    {
        $rpoid='order_FA0moj2KlcFCMU';

        $ras=DB::table('transaction')->where('razorpay_order_id',$rpoid)->first();
        $start_date=$ras->trans_date;
        print_r($ras);

        $start_date=date_create($start_date );
        //$start_date=date_create(date("Y/m/d") );
        date_add($start_date,date_interval_create_from_date_string("1 months"));
        $validity_date= date_format($start_date,"Y-m-d");
        print_r($validity_date);
    }




}
