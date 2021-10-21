<html>
    <head>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
    <div id="sideForm">
    <div class="sidebar-contact">
        <div class="toggle text-white">Apply Now</div>
        <h3 style=" background-color: #1D2C5B; padding: 20px;margin-top: 0;color: #fff; font-size: 18px; border-top-left-radius: 15px;">Apply online
        <span class="toggle text-white active" style="position: initial; float: right; margin-top: -10px;padding: 5px;"><i class="fa fa-times-circle"></i></span></h3>
        <div class="scroll">
          <form  method="POST" action="<?php echo base_url('home/Leadadd');?>" class="leadForm4" style="padding: 20px;">
               <div class="form-group">
                  <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="Full Name" style="">
                  <span id="fnerror"></span>
                  <i class="bar"></i>
               </div>
               <div class="form-group">
                  <input type="email" class="form-control" id="Email"name="Email" placeholder="Email Id" style="">
                  <span id="emailerror"></span>
                  <i class="bar"></i>
               </div>
            
			<div class="form-group">
                  <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Mobile Number" style="">
                  <span id="moberror"></span>
                  <i class="bar"></i>
               </div>
             
			 <div class="form-group">
                  <select class="form-control emailinputclass" id="CourseName" name="CourseName" placeholder="Select your Course" style="">
                     <option value="" disabled selected>Select Courses</option>
                     
                    <option value="MBA">MBA</option>
  <option value="M.com">M.com</option>
   <option value="MA English">MA English</option>
     <option value="BA Tamil">BA Tamil</option>
     <option value="BBA">BBA</option>
      <option value="B.com">B.com</option>
          </select>
               
                  <span id="crserror"></span>
                  <i class="bar"></i>
               </div>
			         <div class="form-group">
                    <div class="row">
                        <div  class="col-sm-12 col-md-4 col-5">
                              <img  src="<?php echo base_url(); ?>assets/img/captcha_bg.png" alt="My Image"  class="captchaimages">

              <?php       
                function generateRandomString($length = 6) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                    }
                    return $randomString;
                }
                $captcha=generateRandomString();
                ?> 
 <div class="centered" style="margin-top:-35px;margin-left:10px;"><b><?php echo $captcha; ?></b>            </div>
                        </div>
                        <div class="col-sm-12 col-md-8 col-7">
                           
                              <input type="text" class="form-control" id="captcha" name="captcha"  placeholder="Enter Text Here"   autocomplete="off" oninput="verifyPass2();" style="border: none;border-bottom: 1px solid #999;"/>
             <input id="captcha1" name="captcha1" type="hidden" value="<?php echo $captcha; ?>" class="form-control">
<span for="captcha"></span>
                  <div class="registrationFormAlert" id="divCheckPass2"></div>
             
              <div class="validate"></div>
                        
                        </div>
                    </div>
                </div>
    
	
	     <div class="form-check">
		 <div class="row">
                        <div class="col-sm-12 col-md-2 col-5">
                <input type="checkbox" class="form-check-input" id="checked" checked="checked">
				</div>
				                        <div class="col-sm-12 col-md-10 col-5">

                <label class="form-check-label" for="exampleCheck1" style="font-size:12px"> By clicking on submit I allow Alagappa to send program details on Email/ SMS/ Phone</label>
              </div>
			  </div>
			  </div>
               <input type="hidden" name="source" value="<?php echo !empty($_GET['source']) ?$_GET['source'] :'ALAGAPPA'; ?>">
                     <input type="hidden" name="media" value="<?php echo !empty($_GET['media']) ?$_GET['media'] :'WEBSITE'; ?>">
                     <input type="hidden" name="campaign" value="<?php echo !empty($_GET['campaign']) ?$_GET['campaign'] :'WEBSITE'; ?>">
               <div class="form-group" style="margin-top:40px;margin-bottom:40px">
                  <button type="submit" class="block btn header-btn btn-lg text-center btn-lg submitBtn" style="width:100%; font-size: 16px;background-color: #F2622C;border-color: #F2622C;color: #fff;">Submit</button>
               </div>
            </form>
        </div>
    </div>
</div>

    </body>
</html>



<style type="text/css">

 
#sideForm.content{
  padding:50px 100px;
}
#sideForm.content h2{
  padding:0;
  margin:0 0 20px;
  font-size:30px;
}
#sideForm .content p{
  font-size:18px;
}
#sideForm .sidebar-contact{
  position:fixed;
  top:50%;
  right:-350px;
  transform:translateY(-50%);
  width:350px;
  height:auto;
  /*padding:40px;*/
  background:#fff;
  box-shadow: 0 20px 50px rgba(0,0,0,.5);
  box-sizing:border-box;
  transition:0.5s;
  border-bottom-left-radius: 15px;
  border-top-left-radius:  15px;
  z-index: 999;
}
#sideForm .sidebar-contact.active{
  right:0;
   z-index: 999;
}
#sideForm .sidebar-contact input,
#sideForm.sidebar-contact textarea{
  width:100%;
  height:36px;
  padding:5px;
  margin-bottom:10px;
  box-sizing:border-box;
  border:1px solid rgba(0,0,0,.5);
  outline:none;
}
#sideForm.sidebar-contact h3{
  margin:0 0 20px;
  padding:10px;
  background-color: #1D2C5B;
  color: #fff;
}
#sideForm .sidebar-contact textarea{
  height:60px;
  resize:none;
}
#sideForm .sidebar-contact input[type="submit"]{
  background:#00bcd4;
  color:#fff;
  cursor:pointer;
  border:none;
  font-size:18px;
}
#sideForm .toggle{
    position: absolute;
    text-align: center;
    cursor: pointer;
    background: #1D2C5B;
    top: 0;
    left: -75px !important;
    line-height: 28px;
    transform: rotate(90deg) !important;
    padding: 12px;
    top: 50%;
	Color:#fff;
}
#sideForm .toggle:before{
  /*content:'\f003';*/
  font-family:fontAwesome;
  font-size:18px;
  color:#fff;
}
/*#sideForm .toggle.active:before{
  content:'\f00d';
}*/
@media(max-width:768px)
{
  #sideForm .sidebar-contact{
    width:100%;
    height:100%;
    right:-100%;
  }
  #sideForm .sidebar-contact .toggle{
    top:50%;
    transform:translateY(-50%);
    transition:0.5s;
  }
   #sideForm .sidebar-contact.active .toggle
  {
    top:0;
    left:0;
    transform:translateY(0);
  }
  #sideForm .scroll{
    width:100%;
    height:100%;
    overflow-y:auto;
  }
  #sideForm .content{
    padding:50px 50px;
  }
}
</style>

<script type="text/javascript">
    jQuery(document).ready(function(){
  jQuery('.toggle').click(function(){
    jQuery('.sidebar-contact').toggleClass('active')
    jQuery('.toggle').toggleClass('active')
  })
})
</script>

<script>
       $(document).ready(function(){
   jQuery.validator.addMethod("lettersonlys", function(value, element) {
			  return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
			}, "Letters only please");    
   
       $(".leadForm4").validate({
        onfocusout: function (element) {
          $(element).valid();
        },
        rules: {
          "FirstName": {
            required: true,
            lettersonlys:true,
            minlength:3
          },
          "Email": {
            required: true,
            email:true
          },
          "Mobile": {
            required: true,
            maxlength:10,
            minlength:10
          },
          "CourseName":{
            required: true
          },
		  "captcha":{
            required: true
          },
          "check":{
            required: true
          }
          
          
        },
        messages: {
          "FirstName": {
            required: 'Please enter name',
            lettersonlys:'Please enter letters only',
            minlength: 'Enter minimum 3 characeters'
          },
          "Email": {
            required: 'Please enter email',
            email: 'Please enter valid email'
          },
          "Mobile": {
            required: 'Please enter mobile',
            maxlength: 'Please enter maximum 10 digits',
            minlength: 'Please enter minimum 10 digits'
          },
          "CourseName":{
            required: 'Please select course'
          },
		  "check":{
            required: 'Please check terms & conditions'
          },
          "captcha":{
            required: 'Please Ener Above Text'
          }
        },
        submitHandler: function(form) {
          form.submit();
        }
        
      });
      });   
    
    
  function verifyPass2() {
  var captcha1 = $("#captcha1").val();
  var captcha = $("#captcha").val();

  if (captcha1!= captcha) {
    $("#divCheckPass2").html("<span style='color:red;'>Captcha do not match</span>");
     $('.submitBtn').prop('disabled', true);
  }else {
    $("#divCheckPass2").html("<span style='color:green;'>Captcha Matched</span>");
    $('.submitBtn').prop('disabled', false);
  
  } 
}


</script>