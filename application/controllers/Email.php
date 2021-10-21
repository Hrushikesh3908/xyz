<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
            
            function  __construct(){
                parent::__construct();
                $this->load->library('email');

                $this->load->model('RegisterModel'); 

            }



            //email using sendgrid 
            
  public function sendmailUsingSendGrid() {


    $lead_id = $this->input->post('lead_id');
    $emailvuewiddetails = $this->input->post('emailvuewiddetails');
    $emailsubjet2 = $this->input->post('emailsubjet2');
    $templatedata=$this->db->select('id')
    ->from('tbl_emailtemplate')
    ->where('name',$emailsubjet2)
    ->get()
    ->row();
    $template_id=$templatedata->id;
    $sro_id=$this->session->userdata('id');
         
    $data= array(
      'temp_id' => $template_id,
      'sro_id' => $sro_id,
      'leadid' => $lead_id,
      'issend' => '1',
    );

    $insertid=$this->m_emailtemplate->addemailsendlog($data);
    $emaildetais=$this->db->select('tbl_students.sro,tbl_students.uni_id')
        ->from('tbl_students')
        ->where('tbl_students.LeadID',$lead_id)
        ->get()
        ->row();    
        $sromeail=$this->db->select('tbl_sro_emaiid.sro_email')
        ->from('tbl_sro_emaiid')
        ->where('tbl_sro_emaiid.uni_id',$emaildetais->uni_id)
        ->where('tbl_sro_emaiid.sro_id',$emaildetais->sro)
        ->get()
        ->row();
    $emailvuewiddetails=str_replace('#SROEMAILID',$sromeail->sro_email,$emailvuewiddetails);
    $emailvuewiddetails=str_replace('#LeadID',$lead_id,$emailvuewiddetails);
    $iframetage="<img src=https://uatsis.edusphere.in/Emailtemplate/reademail/$insertid>";
    $emailvuewiddetails=$emailvuewiddetails.$iframetage;
    $studentdetaiemail=$this->m_emailtemplate->gettemplateinfostudent($lead_id);

    $uni_id=$studentdetaiemail->id;
    $tomail=$studentdetaiemail->EmailId;
    /*$tomail='jawed.akhtar@talentedge.in';
    */



    $subject='hello';
    $msg=$emailvuewiddetails;

    $fromname=$studentdetaiemail->uniname;

    $emailuser=$this->db->where('uni_id',$uni_id)->where('type','alert')->get('tbl_emailmaster')->row();


    $smtp_user=$emailuser->email;
    $smtp_pass=$emailuser->password;
    $frommail=$emailuser->email;

    $subject = 'SGVU';


    $frommail=$emailuser->email;
    $tomail=$tomail;
    $subject=$emailsubjet2;
    $this->load->library('sendgrid');
    $this->sendgrid->sendemail($frommail,$fromname,$tomail,$subject,$msg,$smtp_user,$smtp_pass);

    $this->session->set_flashdata('success','Email Send  successfuly');

     redirect('search/?search='.$lead_id);
}



public function reademail() {
$id=$this->uri->segment(3);


    $data= array(
                 'isopen' =>'1',
                );
   echo $this->m_emailtemplate->updateemailsend($data,$id);

}

//email using sendgrid close here
            
        function index()
            {
        $data['pagetitle'] = 'Account Activation';
        $email = 'hello';
        
        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 587,
        'smtp_user' => 'shindehrushi3908@gmail.com',
        'smtp_pass' => 'Hrushi@3908',
        'mailtype'  => 'html',
        'starttls'  => true,
        'newline'   => "\r\n"
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        
        $this->email->from('shindehrushi3908@gmail.com', 'farah');
        $this->email->to('shindehrushi3908@gmail.com');
        
        $this->email->subject(' Testing testing testing….');
        
        $this->email->message($email);
        $this->email->send();
 
  }

    function send(){
        // Load PHPMailer library

        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        // print_r($mail);die();
        // SMTP configuration
        $mail->isSMTP();

        $mail->Host     = 'shindehrushi3908@gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shindehrushi3908@gmail.com';
        $mail->Password = 'Hrushi@3908';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('shindehrushi3908@gmail.com', 'Hrushi World');
        $mail->addReplyTo('shindehrushi3908@gmail.com', 'Reply By customer');
        
        // Add a recipient
        $mail->addAddress('hrushikesh.shinde3908@gmail.com');
        
        // Add cc or bcc 
        $mail->addCC('tevintern@gmail.com');
        $mail->addBCC('shindehrushi9@gmail.com');
        
        // Email subject
        $mail->Subject = 'Test Send Email via SMTP using PHPMailer in CodeIgniter';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "<h1>Hrushi Testing Code Send HTML Email using SMTP in CodeIgniter</h1>
            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
        
        // print_r($mail);  die();
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
    
    function sendMail()
    {
        $config = array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'shindehrushi3908@gmail.com', // change it to yours
      'smtp_pass' => 'Hrushi@3908',                // change it to yours
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );
    
 $this->email->initialize($config);
 $this->email->set_mailtype("html");
    
          $message = 'Dear Hrushikesh shinde , You Have Successfully completed our course';
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('shindehrushi3908@gmail.com'); // change it to yours
          $this->email->to('shindehrushi3908@gmail.com');   // change it to yours
          $this->email->subject('Hello Hrushi Congratuation...! ');
          $this->email->message($message);

          if($this->email->send())
         {
          echo 'Email sent.';
         }
         else
        {
         show_error($this->email->print_debugger());
        }
    
    }



    function sendData()
    {
        // print_r()$this->input->post();
        $emails= $this->RegisterModel->get_cust_emails();
        
        //  print_r($emails);
        //  die();
 
        foreach($emails as $userData)
        {

                
                    // print_r($userData);
                    // echo 'asdf12'; die();
                    // $saveEmail=new RegisterModel;
                    // $saveEmail->store_email_data();
                            
                    // $name=$_POST['name'];
                    // $email=$_POST['email'];
                    // $contactno=$_POST['contactno'];
                    // $program='Distance & Online Programs';
                    // $enquiry=$_POST['enquiry'];

                    // echo 'save';
                    //         echo $userData->email;
                    //         die();

                    $config = array(
                    'protocol'  => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'shindehrushi3908@gmail.com',
                    'smtp_pass' => 'Hrushi@3908',
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8'
                    );
                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");
                     
                    //Email content
                     $htmlContent = 'Dear '.$userData->name ;
                //   echo $htmlContent;
                    $htmlContent .= '<h2>Sale Sale Sale..</h2>';
                    $htmlContent .= '<p>Kindly Ignore This Mail.</p>';
                        
                    $this->email->to($userData->email);
                    $this->email->from('shindehrushi3908@gmail.com', ' Diwali Dhamaka..!');
                    $this->email->subject('90% flat discount ..');
                    $this->email->message($htmlContent);
                    $this->email->cc("hrushikesh.shinde3908@gmail.com", "Test");
                    // $this->email->bcc("hrushikesh.shinde3908@gmail.com", "Test");
                    $this->email->attach("assets/img/icon3.svg");  //working

                    //Send email
                    $this->email->send();
                
                

         }
            echo 'Email Sent '; die();
}



function sendStudentEmail()
    {
        // print_r()$this->input->post();
        // $emails= $this->RegisterModel->get_cust_emails();
        //  print_r($emails);
        //  die();
 
                    // print_r($userData);
                    // echo 'asdf12'; die();
                     $saveEmail=new RegisterModel;
                     $saveEmail->store_email_data();
                        // echo 'data store';    
                     $name=$_POST['name'];
                     $emailStudent=$_POST['email'];
                     $contactno=$_POST['contactno'];
                     $enquiry=$_POST['enquiry'];

                    //         echo 'save';
                    //         echo $userData->email;
                    //         die();

                    $config = array(
                    'protocol'  => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'shindehrushi3908@gmail.com',
                    'smtp_pass' => 'Hrushi@3908',
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8'
                    );
                    $this->email->initialize($config);
                    $this->email->set_mailtype("html");
                    $this->email->set_newline("\r\n");
                     
                    //Email content
                     $htmlContent = 'Dear '.$name ;
                
                    $htmlContent .= '<h1>Sale Sale Sale..</h1>';
                    $htmlContent .= '<p>Kindly Ignore This Mail.</p>';
                //    echo $emailStudent; die();        
                    $this->email->to($emailStudent);
                    $this->email->from('shindehrushi3908@gmail.com', ' Diwali Dhamaka..!');
                    $this->email->subject('90% flat discount ..');
                    $this->email->message($htmlContent);
                    $this->email->cc("hrushikesh.shinde3908@gmail.com", "Test");
                    // $this->email->bcc("hrushikesh.shinde3908@gmail.com", "Test");
                    $this->email->attach("assets/img/icon3.svg");  //working

                    //Send email
                    $this->email->send();
                
                

        
          redirect(base_url('register/emailSent')); 

}

}