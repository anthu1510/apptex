<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Coupon extends Model
{
    protected $table = 'coupon';
    protected $primaryKey='id';

    public $id;
    public $couponcode;

    public function __construct()
    {
     $this->id=$this->getId();
     $this->couponcode=$this->generateCoupon($this->id);
    }


    public function getId()
    {
        $ret= DB::select(DB::raw("select  if( Max(`code`) is null,10000,Max(`code`)+1) as Code from coupon"));
        $rets=$ret[0];
        return $rets->Code;
    }
    public function getGenId()
    {
        $ret= DB::select(DB::raw("select  if( Max(`gen_id`) is null,1,Max(`gen_id`)+1) as Code from coupon"));
        $rets=$ret[0];
        return $rets->Code;
    }

    private function generateCoupon($num)
    {
        $gennum=$this->generateBpayRef($num);
        return $this->NumFormat($gennum);
    }

    public function getCoupon(){
        $code=$this->getId();
        return $this->generateCoupon($code);
    }


   private function generateBpayRef($number) {

        $number = preg_replace("/\D/", "", $number);

        // The seed number needs to be numeric
        if(!is_numeric($number)) return false;

        // Must be a positive number
        if($number <= 0) return false;

        // Get the length of the seed number
        $length = strlen($number);

        $total = 0;

        // For each character in seed number, sum the character multiplied by its one based array position (instead of normal PHP zero based numbering)
        for($i = 0; $i < $length; $i++) $total += $number{$i} * ($i + 1);

        // The check digit is the result of the sum total from above mod 10
        $checkdigit = fmod($total, 10);

        // Return the original seed plus the check digit
        return $number . $checkdigit;

    }


    /*for($i=10000;$i<20000;$i++)
{
echo "<br>".generateBpayRef($i). " :  ".NumGen(generateBpayRef($i));
//echo ",".generateBpayRef($i);
}*/

private function NumFormat($strn)

{
    $p1=substr($strn,0,3);
    $p2=substr($strn,3,3);
    return "FG-".$p1."-".$p2;
}


    public static function UseCoupon($cuponCode)
    {
        $data = [
            'status' => 'alloted'
        ];
        $res = DB::table('coupon')->where('coupon_code', $cuponCode)->update($data);
        if ($res == 1) {
            return 1;

        } else {
            return 0;
        }
    }



}
