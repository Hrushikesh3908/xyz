
 <?php
//  echo "okk";die;

require './vendor/PHPMailerAutoload.php';
$servername = "localhost";
$username = "iexcel_lp";
$password = "rmDSrkQ[#mEZ";
$dbname = "iexcel_lp";



 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if($_POST){
   
   $name=$_POST['name'];
   $email=$_POST['email'];
   $contactno=$_POST['contactno'];
   $program='Distance & Online Programs';
   $enquiry=$_POST['enquiry'];

  $sql = "INSERT INTO wp_lead (name, email, contactno, program, enquiry)
  VALUES ('$name', '$email', '$contactno', '$program', '$enquiry')";
            $conn->exec($sql);
           
             $mail = new PHPMailer();

            //$mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            // $mail->SMTPSecure = 'tls';
            $mail->Host = "smtp.gmail.com";
       
            $mail->Port = 587;
            $mail->IsHTML(true);
            //Username to use for SMTP authentication
            $mail->Username = "ranjini.ramanath@iexcel.in";
            $mail->Password = "Vishnupriya@68";
           
            //Set who the message is to be sent from
             $mail->setFrom('ranjini.ramanath@iexcel.in', 'ranjini ramanath');
            //Set an alternative reply-to address
            // $mail->addReplyTo('replyto@gmail.com', 'Secure Developer');
            //Set who the message is to be sent to
            // $mail->addAddress('kiran.infinite1@gmail.com', 'rohit sarode');
            // //Set the subject line
            // $mail->Subject = 'PHPMailer SMTP test';
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
                


        $email_body = 'Name : '.$name.'<br>';
        $email_body .= 'Mobile Number : '.$contactno .'<br>';
        $email_body .= 'Email : '.$email .'<br>';
        $email_body .= 'Program : '.$program .'<br>';
        $email_body .= 'Enquiry : '.$enquiry .'<br>';  

        $mail->setFrom('ranjini.ramanath@iexcel.in', 'ranjini ramanath');  
        $mail->addAddress('ranjini61981@gmail.com', 'Ranjini');  
        $mail->addAddress('a.s@iexcel.in', 'A S Iexcel');  
        $mail->addAddress('ranjini.ramanath@iexcel.in', 'nagaraja gopalan');
        $mail->addAddress('nagaraja.gopalan@iexcel.in.test-google-a.com','Nagaraja');
        $mail->addCC('info@iexcel.in', 'Info iEXCEL');
        $mail->addCC("durgesh.infinite1@gmail.com", "Durgesh Mundrawale");
        $mail->addCC("prakash@infinite1.in", "Prakash Kulkarni");
        $mail->addCC("emailtest@iexcel.in", "Email Test");

        $mail->Subject  = 'IEXCEL digital learning solution : NMIMS Landing Page ';
        $mail->Body     = $email_body;
        $mail->IsHTML(true);  
        $mail->msgHTML($mail->Body);
            $sent=$mail->send();
    //send the message, check for errors
    if (!$sent) {
           print_r($mail);
        echo "Mailer Error: " . $mail->ErrorInfo;
    die;
       
    } else {
        echo "Message sent!";
       
        header("Location:thank-you.html");

    }
   
           
           
            /////////////////////////////////////////////////
           
       
    }

?>