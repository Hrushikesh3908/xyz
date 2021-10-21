<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
<section style="background-size:cover;  background-repeat: no-repeat;  min-height:500px;  background-image: url(<?php echo base_url('assets/images/mcom_lp/lpMcom.png') ?>)"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-white">
                    <img class=" mt-3" style="width:150px;" src="<?php echo base_url('assets/images/mcom_lp/logo_alagappa.svg') ?>" alt="">
                    <div class="row mb-5" style="margin-top:150px;">
                        <h1>Master of Commerce<br>
                        <b>  M.Com</b></h1>
                        <p style="font-size:14px;">M.Com is a base for the purpose of higher research studies. They<br>
                        can avail wide employment opportunities and employability skills   <br>
                        in the field of Commerce and Industry.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 mb-0"><img  style="width:30px;" src="<?php echo base_url('assets/images/mcom_lp/Huck_Point.svg') ?>" alt="Images Path Not Found"></div>
                        <div class="col-sm-5"><p>Lorem Ipsum is simply dummy text of the printing and</p> </div> 
                        <div class="col-sm-1"><img  style="width:30px;" src="<?php echo base_url('assets/images/mcom_lp/Huck_Point.svg') ?>" alt="Images Path Not Found"></div>
                        <div class="col-sm-5"> <p>Lorem Ipsum is simply dummy text of the printing and</p> </div>
                    </div>
                    <div class="row">
                         <div class="col-sm-1"><img  style="width:30px;" src="<?php echo base_url('assets/images/mcom_lp/Huck_Point.svg') ?>" alt="Images Path Not Found"></div>
                        <div class="col-sm-5"> <p>Lorem Ipsum is simply dummy text of the printing and</p> </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <style>
                        .button {

                            background: currentColor;
                            border: 1px solid currentColor;
                            font-size: 16px;
                            background-color:#FF001C;
                            border-color:#F2622C;
                            color: #fff;
                            padding: 0.50rem 3rem;
                            cursor: pointer;
                            -webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
                            transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
                            overflow: hidden;
                            box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 20%), 0 1px 5px 0 rgb(0 0 0 / 12%);
                        
                        }

                        button, input, select, textarea {
                            font-family: inherit;
                            font-size: inherit;
                            line-height: inherit;
                        }
                        .pt-4{
                            margin-top:20px;
                        }
                        .captchainputform{
                            Margin-top:5px;
                        }

                        @media only screen and (max-width:  768px) {
                            
                            .captchainputform{
                            Margin-top:30px!important;
                        }
                        }
                    </style>

                        <div class="appview mb-5" style="margin-top:100px;">
                            <div style="background-color: #1D2C5B; padding: 20px;border-top-left-radius: 10px; border-top-right-radius: 10px;color:#fff;font-size:18px;border-left: 30px solid #b72027;">
                                     <h2 class="text-white text-center" style="font-size:26px">Request CallBack</h2>
                            </div>
                            <div style="background-color: #fff; padding: 30px; box-shadow: 0px 7px 9px #545454;    border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                    <form action="<?php echo base_url('register/store_student');?>" method="post" class="mt-3 leadForm3 " novalidate="novalidate">
                                        <div class="row gy-4"> 

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control " id="name" name="name" placeholder="Full Name" style="">
                                                    <span id="fnerror"></span>
                                                    <i class="bar"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Id" style="">
                                                        <span id="emailerror"></span>
                                                        <i class="bar"></i>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" style="">
                                                    <span id="moberror"></span>
                                                    <i class="bar"></i>
                                                     </div>
                                                </div>

                                                    

                                                <div class="col-md-12">
                                                    <select class="form-control" id="course_id" name="course_id">
                                                        <option value="0"  selected>M.Com</option>
                                                      
                                                    </select>
                                                </div>
                        
                                                
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <div class="row">

                                                            <div class="col-7 pr-0">
                                                                <div class="form-group mt-3  mb-2">  
                                                                <span id="Captcha-image" class="w-75"><img id="Imageid" src="https://www.auedu.in/captcha/1631603356.1034.jpg" style="width: 95px; height: 35px; border: 0;" alt=" "></span>
                                                                    <button type="button" onclick="getNewCaptcha();" class="w-25 btn btn-primary">
                                                                    <i class="fa fa-redo text-white"></i>
                                                                    </button> 
                                                                    <input type="hidden" name="captcha" id="captcha" value="U6pH">
                                                                </div>
                                                            </div>

                                                            <div class="col-5  pl-0">
                                                                <div class="form-group mt-3  mb-2"> 
                                                                        <input type="text" name="confirmcaptcha" id="confirmcaptcha" placeholder="Enter Captcha" required="" class="form-control">
                                                                </div> 
                                                            </div> 
                                                            
                                                        </div>
                                                     </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div class="form-group pl-3 pr-3">
                                                        <div class="form-group text-center mt-3" style="line-height: 1;font-size: 12px;">
                                                            <input class="form-check-input" type="checkbox" value="" id="check" name="check" checked=""> 
                                                            <small class="form-check-label" for="flexCheckChecked">
                                                            By clicking on submit I allow Alagappa to call me &amp; send program information on Email/ SMS/ Phone
                                                            </small> 
                                                        </div>   
                                                     </div>
                                                </div>
                            
                                            <div class="col-md-12 text-center"> 
                                                <button type="submit" class="button submitBtn"><span>SUBMIT</span></button>
                                            </div>

                                        </div>
                                   </form>
                            </div>
                        </div>
                </div>                         
            </div>
          
        </div>                              


</section>

<!-- about section -->
<section class="mb-5 ">
    <div class="container">
        <div class="row   justify-content-center p-5" style=" box-shadow: 0px 10px 20px #00000029; border-radius: 20px; opacity: 0.95;border-radius:15px;">
            <h3 class="text-center"> About Program</h3>

            
            <h7 class="justify-content-center" style="color:#203061; text-align: center; font: normal normal normal 28px/41px Poppins; letter-spacing: 0px; color: #203061;">Master of Commerce programme focuses both in-depth study of theory along with acquisition of professional and research skills.
            </h7>
                
            
            <br><br> 
            <div class="col-sm-2 "></div> 
            <div class="col-sm-8 text-center "  > <small>This programme makes learners to develop skill-oriented entrepreneurship knowledge, business communication at critical thinking and proficiency in the field of business</small></div>
            <div class="col-sm-2"></div>
            <br><br>
            <div class="col-sm-2"></div>
            <div class="col-sm-8 text-center "> <small>This programme makes learners to develop skill-oriented entrepreneurship knowledge, business communication at critical thinking and proficiency in the field of business</small></div>
            <div class="col-sm-2"></div>

        </div>
    </div>
</section>


<!-- objective section -->
<section class="mt-5 mb-5" style=" background-repeat: no-repeat; background-position: right;  background-size:contain; background-color: #5476dd; background-image: url(<?php echo base_url('assets/images/alagappa/iStock-665502752/1.png') ?>)">
             <div class="container" >
                <div class="row " >
                    <div class="col-lg-6  pt-5 pb-5 pr-5 text-white " style="background-color:#5476DD"  > 
                        <div class="row">
                            <div class="col-lg-12">
                            <h4 class="mb-5">Progrma Objective</h4>                         
                            <hr class="mb-0" style="width: 6%; float: left; height: 4px;  color: #fff;  background: #ff0;">
                           <br> 
                            <p class="mt-2">To impart a comprehensive knowledge in Commerce to the students in a pragmatic</p>
                            <hr class="mb-0" style="width: 6%; float: left; height: 4px;  color: #fff;  background: #ff0;">
                           <br> 
                           <p class="mt-2">To be a strapping pedestal to key-in and fetch an assortment of job opportunities in the Public and Private Sectors.</p>
                           <hr class="mb-0" style="width: 6%; float: left; height: 4px;  color: #fff;  background: #ff0;">
                           <br> 
                            <p class="mt-2">  To craft Accounting, Finance, Tax and Management experts through captivating professional and cerebral associations</p>
                            </div>
                        </div>           
                    </div>
                    
                    <div class="col-lg-6 pl-5 text-white" >
                        <div class="row"> 
                           
                            <div class="col-sm-6 p-5">
                                <img style="width:40px;" src="<?php echo base_url('assets/images/mcom_lp/objective/Eligibility.svg') ?>" alt="">
                                <p class="mb-0 mt-3"> <b>Eligibility :</b> </p> 
                                <h7>Pass in any Degree from Recognized University</h7>
                            </div>
                           
                        
                           
                            <div class="col-sm-6 p-5">
                                <img style="width:40px;" src="<?php echo base_url('assets/images/mcom_lp/objective/Duration.svg') ?>" alt="">
                                <p class="mb-0 mt-3"> <b>Duration :</b></p> 
                                <small>2 year Maximum - 4 year</small>
                            </div>
                           
                        </div>
                        <!-- row 2nd -->
                        <div class="row">

                            <div class="col-sm-6  p-5">
                                <img style="width:40px;" src="<?php echo base_url('assets/images/mcom_lp/objective/Semester.svg') ?>" alt="">
                                <p class="mb-0 mt-3"><b>Semester :</b></p> 
                                <small>6</small>
                            </div>
                            <div class="col-sm-6 p-5 ">                                                                                                                                                                 
                                <img style="width:40px;" src="<?php echo base_url('assets/images/mcom_lp/objective/Mode.svg') ?>" alt="">
                                <p class="mb-0 mt-3"><b>Mode :</b></p> 
                                <small>Online Mode</small>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button class="p-2 pl-4 pr-4 mb-5 " style="border:none ;border-radius:5px;  color:#FF001C; "><b>Request CallBack</b></button> 
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- for whom section -->
<section>
    <div class="container">
        <div class="row mb-5">
            <h4 class="mb-5">For Whom</h4>
            <div col-lg-6>
                <div class="row mb-4">
                    <div class="col-sm-1"> <img  style="width:50px;" src="<?php echo base_url('assets/images/mcom_lp/whom/whom3.svg') ?>" alt=""> </div>
                    <div class="col-sm-2"><small>Final Year Students</small></div>
                    <div class="col-sm-1"><img  style="width:50px;" src="<?php echo base_url('assets/images/mcom_lp/whom/whom4.svg') ?>" alt=""></div>
                    <div class="col-sm-2"><small>Any Graduate from Recognized University.</small></div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-1"> <img style="width:50px;"  src="<?php echo base_url('assets/images/mcom_lp/whom/whom2.svg') ?>" alt=""> </div>
                    <div class="col-sm-2"><small>Entrepreneur / Business Professionals who seek success in managing their business projects</small></div>
                    <div class="col-sm-1"><img  style="width:50px;" src="<?php echo base_url('assets/images/mcom_lp/whom/whom1.svg') ?>" alt=""></div>
                    <div class="col-sm-2"><small>Working Professionals who seek to upgrade their abilities for global caree</small></div>
                </div>
                <div class="row mb-4 mt-5 ml-5">
                    <button class=" text-white pl-4 pr-4 p-2" style="border:none ; border-radius:5px; background-color:#FF001C;">REQUEST CALL BACK</button>
                </div>
            </div>
            <div col-lg-6></div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-5"></div>
            <div class="col-lg-7 mb-5" >
                <h3 class="">Top Recuriters For Alagappa</h3>
                
                <div class="row mr-4" >
                    <div col-sm-4>  <img style="width:200px; height:140px;" src="<?php echo base_url('assets/images/mcom_lp/company/company1.png') ?>" alt=""></div>
                    <div col-sm-4>  <img style="width:200px; height:140px;" src="<?php echo base_url('assets/images/mcom_lp/company/comapany2.png') ?>" alt=""></div>
                    <div col-sm-4>  <img style="width:200px; height:140px;" src="<?php echo base_url('assets/images/mcom_lp/company/comapany3.png') ?>" alt=""></div>
                </div>
                <div class="row mr-4" >
                    <div col-sm-4>  <img style="width:200px; height:140px;" src="<?php echo base_url('assets/images/mcom_lp/company/company4.png') ?>" alt=""></div>
                    <div col-sm-4>  <img style="width:200px; height:140px;" src="<?php echo base_url('assets/images/mcom_lp/company/company5.png') ?>" alt=""></div>
                </div>
                <div>
                    <p class="justify-content-center" style="font-size:12px;"><br>Disclaimer : All third party trademarks (including logos and icons) referenced here remain the property of<br>
                        their respective owners. All references to third party trademarks are to represent the organisations where<br>
                        university alumni are or were employed
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer section -->
<section class="footer">
    
    <div class='container'>
        <div class="row mt-5">
            <div class="col-lg-3">
                <img style="width:130px; height:80px; background-size:contain;" src="<?php echo base_url('assets/images/mcom_lp/footerLogo/footer-logo1.png') ?>" alt="">
            </div>
            <!-- <div class="col-lg-1 "></div> -->

            <div class="col-lg-3">
            <img  style="width:130px; height:80px; background-size:contain;" src="<?php echo base_url('assets/images/mcom_lp/footerLogo/footer-logo.png') ?>" alt="">
            </div>
            <!-- <div class="col-lg-1" ></div> -->

            <div class="col-lg-3">
            <img style="width:130px; height:80px; background-size:contain;" src="<?php echo base_url('assets/images/mcom_lp/footerLogo/footer-logo3.png') ?>" alt="">
            </div>
            <!-- <div class="col-lg-1" ></div> -->
           
            <div class="col-lg-3 ">
            <img style="width:150px; height:80px; background-size:contain;" src="<?php echo base_url('assets/images/mcom_lp/footerLogo/footer-logo2.png') ?>" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 mb-5">
               
                <small><b>Accredited With<br>Grade "A" by NAAC</b></small>
            </div>
            <div class="col-lg-1 " style="border-left:1px solid gray; height:45px;"></div>

            <div class="col-lg-2">
         
            <small ><b>NIRF<bR>Ranging 36th</b></small>
            </div>
            <div class="col-lg-1" style="border-left:1px solid gray; height:45px;   "></div>

            <div class="col-lg-2">
          
            <small><b>Graded as Category 1<br>By MHRD-UGC</b></small>
            </div>
            <div class="col-lg-1" style="border-left:1px solid gray; height:45px; " ></div>
           
            <div class="col-lg-2">
            <small><b>24th in QS<br>India Ranking</b></small>
            </div>
        </div>
    </div>

    <div style="background-color:#1D2C5B;">
        <p class="text-white p-3 ml-5" style="font-size:12px;"> Copyright 2021 of Alagappa University | All Rights Reserved</p>
    </div>
</section>




<style> 
    .error {
        color: red;
        font-size: 13px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function(){
    jQuery.validator.addMethod("lettersonlys", function(value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
      }, "Letters only please");      jQuery.validator.addMethod("lettersonlys", function(value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
      }, "Letters only please");  
  });
</script>

<script type="text/javascript">
           $(document).ready(function(){
           
            jQuery.validator.addMethod("lettersonlys", function(value, element) {
                    return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
                }, "Letters only please");  
                
                jQuery.validator.addMethod("validateemail", function(value, element) {
                    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                    return reg.test(value);
                }, "Please enter valid email");

                // jQuery.validator.addMethod("checkPassword", function(value, element) {
                //     var password = document.getElementById("confirmPswd").value;
                //     return checkPasswordLength(password);
                // }, "wrong password");
            

                $(".leadForm3").validate({

                        onfocusout: function (element) {
                        $(element).valid();
                        },

                        rules: {
                            "name": {
                                required: true,
                                lettersonlys:true,
                                minlength:3
                            },
                            
                            "email": {
                                required: true,
                                validateemail:true
                            },
                            "mobile": {
                                required: true,
                                number: true,
                                maxlength:10,
                                minlength:10
                            },
                            "course_id": {
                                required: true                               
                            }

                           
                        },   //rule close
                        messages: {
                            "name": {
                                required: 'Please enter first name',
                                lettersonlys:'Please enter letters only',
                                minlength: 'Enter minimum 3 characeters'
                            },
                          
                            "email": {
                                required: 'Please enter email',
                                email: 'Please enter valid email'
                            },
                            "mobile": {
                                required: 'Please enter mobile',
                                number: 'Please enter digits only',
                                maxlength: 'Please enter maximum 10 digits',
                                minlength: 'Please enter minimum 10 digits'
                            },
                            "course_id": {
                                required:'please select course'
                               
                            }
                            
                        },
                        submitHandler: function(form) {
                        form.submit();
                        }
                });//validate close          
         });
                    
        </script>
<script>

    $(document).ready(function() {
        $('#university_dropdown').on('change', function() {
        var university_id = this.value;
      // console.log(university_id);

        $.ajax({
        url: "register/result",
        type: "POST",
        data: {
            university_id : university_id    
        },
        cache: false,
        success : function(result) {
            const courses = JSON.parse(result);
            //console.log(courses);
            $('#course_dropdown').empty();
            var html="";
            $.each( courses, function( key, course ) {
                //console.log(course.courseID);
                //console.log(course.courseName);
                //console.log('#####');
                html+="<option value="+course.courseID+">";
                html+=course.courseName;
                html+="</option>";

                });
                
            $('#course_dropdown').html(html);
       
        $("#state-dropdown").html(result);
        $('#city-dropdown').html('<option value="">Select State First</option>'); 
        }
    });
 });    
    

});
