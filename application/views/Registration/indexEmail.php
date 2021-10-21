<html>
    <head>
    
    <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title> Periyar University Online Education</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <link href="https://www.periyaredu.in/assets/img/lp/mba/fav.png" rel="icon">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

 <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
     <style>
          .error{
              color:red;
              font-size:12px;
          }
          ::placeholder {
            font-size:16px;
          }
          
        </style>
    </head>
    <body>
        <section class="about" style="background-image: url('assets/images/back.jfif');background-size: cover; background-repeat: no-repeat; background-position: center; min-height:660px;">
        <div class="container">
            <!-- form  -->
            <div class="row">
                 <div class="col-lg-6 mt-5 p-5"  style="background-color:#fff;">
                            <h1 class="text-center">Student Info</h1>   
                            <p class="text-center">Create Your Account It's Free and only takes a minutec</p>
                       


<form name="" id="" action="<?php echo base_url('Email/sendStudentEmail');?>" method="post">

    <input type="hidden" name="type" value="">
    <div class="name-box">
    
            <div class="form-group">
                <label>Name</label>
                <input name="name" id="name" placeholder="Type name" type="text">
                <div id="requestsamplefrm_name_errorloc" class="errormsg">Please enter your Name</div> 
            </div>
            <div class="form-group">
                <label>Email ID</label>
                <input name="email" id="email" placeholder="Type email id" type="text" >
                <div id="requestsamplefrm_email_errorloc" class="errormsg">Please enter your valid email</div>
            </div>
    
            <div class="form-group">
                    <label>Mobile Number</label>
                    <input name="contactno" id="contactno" placeholder="Enter Contact Number" onkeypress="return numbersonly(event)"  type="text">
                    <div id="requestsamplefrm_contactno_errorloc" class="errormsg">Please enter your contact no.</div>
            </div class="form-group">            
            
            <div class="form-group">
                <label>Your City</label>
                <select name="enquiry" id="search-box" >
                <option>Mumbai</option>
                <option>Pune</option>
                </select>
                  <div id="requestsamplefrm_enquiry_errorloc" class="errormsg">Please enter gender</div>
       
            </div>
                
       

    <div>

    <div class="form-group">
            <input type="checkbox" name="checkbox" class="in-check" style="width:20%" id="chkbox-check" checked="" required="">
            <label style="font-size: 11px;">By clicking on this button,<br> I authorise an NMIMS Global Access<br> AEP representative to contact<br> me via phone
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="SUBMIT" class="btn submit-btn">
    </div>
    

</form>

                    
</body>
</html>
