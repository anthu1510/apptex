<?php

namespace App;
use Mail;

use Illuminate\Database\Eloquent\Model;

class AttractMail extends Model
{
    public $from_email;
    public $from_name;
    public $to_email;
    public $to_name;
    public $subject;
    public $data;


    public  function html_email() {

       // $data = array('name'=>"Apparel Importers Data.");
        Mail::send('mail', $this->data, function($message) {
            $message->to($this->to_email, $this->to_name)->subject
            ($this->subject);
            $message->from($this->from_email,$this->from_name);
        });
        return "success";
    }

}
