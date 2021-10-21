<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendgrid {



public function sendemail($frommail,$fromname,$tomail,$subject,$msg,$smtp_user="",$smtp_pass="",$bccmail="")
{
    $smtp_user='apikey';


  if(!$smtp_user || !$smtp_pass) {
    $smtp_user='apikey';
    $smtp_pass='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';
  }

//$ccmail=['sameer.rupani@talentedge.in','sunil.desai@talentedge.in','durgesh.mundrawale@talentedge.in','bhushan.datar@talentedge.in','shrikant.rajmane@talentedge.in','meera.date@talentedge.in'];
//$this->email->bcc('fazlu.khan@talentedge.in');
/*$bccmail='fazlu.khan@talentedge.in';*/
/*$tomail='jawed.akhtar@talentedge.in';*/
     $CI = & get_instance();
     $CI->load->library('email');
     $config = array(
          'protocol'  => 'smtp',
          'smtp_host' => 'ssl://smtp.sendgrid.net',
          'smtp_port' => 465,
          'smtp_user' => $smtp_user,
          'smtp_pass' => $smtp_pass,
          'mailtype'  => 'html',
          'charset'   => 'utf-8'
                        );
        $CI->email->initialize($config);
        $CI->email->set_mailtype("html");
        $CI->email->set_newline("\r\n");

        $CI->email->from($frommail, $fromname);
        $CI->email->to($tomail);
        if($bccmail){
            $bccmail=[$frommail,$bccmail];
/*            $CI->email->bcc($bccmail);
*/        }
    
        $CI->email->subject($subject);
        $CI->email->message($msg);
        return $CI->email->send();
     
    //  print_r ($CI->email->print_debugger());
    // exit;
}

}