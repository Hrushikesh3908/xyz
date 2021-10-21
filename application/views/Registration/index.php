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
                            <h1 class="text-center">Register</h1>   
                            <p class="text-center">Create Your Account It's Free and only takes a minute</p>
                        <form  class="formValidate" action="<?php echo base_url('register/store');?>" method="POST"   novalidate="novalidate">  
                        
                            <div class="row">
                                <div class="col-sm-6">  
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                                    <!-- <label class="error" for="mobile"></label> -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="">
                                <input type="email" class="form-control" id="email"  name="email"  placeholder="Email">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="">
                                <input type="tel" class="form-control"  id="mobile" name="mobile"   placeholder="Mobile">
                                </div>
                            </div>

                        
                            <div class="form-group mb-0" >
                                <div class="">
                                <input type="password" onkeyup='checkPasswordLength(this.value)' class="form-control" id="pswd" name="password" placeholder="Password">
                                <span id="errorSpan" style="color:red;"></span><br>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                    <div class="">
                                <input type="password" onkeyup="confirmPasswordFunction(this.value)" class="form-control" id="confirmPswd" name="confirmPassword" placeholder="Confirm Password">
                                <span id="errorConfirmSpan" style="color:red;"></span><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <select name="university_ID" id="university_dropdown">
                                     <option value="0" class="form-control">Select University</option>
                                     <?php foreach($universities as $university) { ?>
                                    <option value="<?php echo $university->id ; ?>"> <?php echo $university->uni_name ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="course_ID" id="course_dropdown">
                                <option value="0" class="form-control">Select Course</option>
                                     <?php foreach($courses as $course) { ?>
                                    <option value="<?php echo $course->courseID ; ?>"> <?php echo $course->courseName ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="country_ID" id="country_dropdown">
                                     <option value="0" class="form-control">Select Country</option>
                                     <?php foreach($country as $cou) { ?>
                                    <option value="<?php echo $cou->country_id ; ?>"> <?php echo $cou->country_name ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="state_ID" id="state_dropdown">
                                     <option value="0" class="form-control">Select State</option>
                                     <?php foreach($state as $sta) { ?>
                                    <option value="<?php echo $sta->state_id ; ?>"> <?php echo $sta->state_name ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="city_ID" id="city_dropdown">
                                     <option value="0" class="form-control">Select City</option>
                                     <?php foreach($city as $city) { ?>
                                    <option value="<?php echo $city->city_id ; ?>"> <?php echo $city->city_name ; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" onclick="myFunction()" class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1" >show Password</label>
                            </div>
                            <button type="submit"   name="save" style="border-radius:30px; border-outline:none; border:none;" class="pt-2 pb-2  btn-block btn-success">Submit</button>
                            
                        </form>
                    
                </div>
            <!-- fetch table start -->
                <div class="col-lg-6"> 
                        
                    
                      
                        <div class="row">
                            <div class="col-lg-12">           
                                <h2>Students Information           
                                    <div class="pull-right">
                                    <a class="btn btn-primary" href="<?php echo base_url('students/create') ?>"> Create New Student</a>
                                    </div>
                                </h2>
                            </div>
                        </div>
                      
                        <div class="table-responsive bg-white">
                          <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>University</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                
                            <tbody>
                                          
                                 <?php foreach ($register as $student) { ?>       
                                <tr>
                                    <td><?php  echo $student->id; ?></td>
                                    <td><?php echo $student->name; ?></td>   
                                    <td><?php echo $student->email; ?></td>
                                    <td><?php echo $student->mobile;  ?></td>
                                    <td><?php  echo $student->uni_name;  ?></td>          
                                    <td><?php  echo $student->courseName;  ?></td>
                                    <td>
                                        <form method="DELETE" action="<?php echo base_url('Register/delete1/'.$student->id);?>">
                                        <a class="btn btn-info btn-xs" href="<?php echo base_url('Register/edit/'.$student->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>

                                        <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
                                        </form>
                                    </td>     
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                            
                        </div>

                        </div>
                    </div>                
                </div>
            </div>
        </div>     
        
        </section>
        
<!-- show password js -->
             <script>
                function myFunction() {
                    var x = document.getElementById("pswd");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }

                function confirmPasswordFunction(confirmPassword) {
                    var password = document.getElementById("pswd").value;
               //     var confirmPassword = document.getElementById("confirmPswd");
                    if (password == confirmPassword) {
                        document.getElementById("errorConfirmSpan").style="color:green;";
                        document.getElementById("errorConfirmSpan").innerHTML ="Correct Password..!";
                        return true;
                    } else {
                       // span.style.color = "red";
                        document.getElementById("errorConfirmSpan").innerHTML ="Password Not Match..!";
                        return false;
                    }
                }

                function checkPasswordLength(password) {
                    var span = document.getElementById("errorSpan");
                    if (password.length >= 8) {
                        span.style.color = "green";
                        document.getElementById("errorSpan").innerHTML = "Strong Password";
                        return;
                    
                    } else {
                        span.style.color = "red";
                        document.getElementById("errorSpan").innerHTML = "Weak Password";
                      
                    }
                }
                </script>

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
            

                $(".formValidate").validate({

                        onfocusout: function (element) {
                        $(element).valid();
                        },

                        rules: {
                            "firstName": {
                                required: true,
                                lettersonlys:true,
                                minlength:3
                            },
                            "lastName": {
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
                            
                            "password":{
                                required: true,
                                minlength:8,
                                maxlength:15
                            } ,
                            "confirmPassword":{
                                required: true,
                         //       checkPassword:true
                               
                            } 
                        },   //rule close
                        messages: {
                            "firstName": {
                                required: 'Please enter first name',
                                lettersonlys:'Please enter letters only',
                                minlength: 'Enter minimum 3 characeters'
                            },
                            "lastName": {
                                required: 'Please enter last name',
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
                            "password":{
                                required: 'Please enter password',
                                minlength: 'Enter minimum 8 digit',
                                maxlength: 'Please enter maximum 15 digits'
                            } ,
                            "confirmPassword":{
                                required: 'Please enter password',
                            } 
                        },
                        submitHandler: function(form) {
                        form.submit();
                        }
                });//validate close          
         });
                    
        </script>
<script>
    
    // $(document).ready(function(){
    //     $( "#university").change(function() {
    //        // alert( "Handler for .change() called." );
    //        var a=$( "#university" ).val();
    //        console.log(a);
    //     });

    //     $( "#course" ).change(function() {
    //        // alert( "Handler for .change() called." );
    //        var b=$( "#course" ).val();
    //        console.log(b);         
    //     });

    // });
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );

    $(document).ready(function() {
        $('#country_dropdown').on('change', function() {
        //   alert(1);
            var country_id = this.value;
        //    console.log(this.value);
        //    console.log(country_id);

        $.ajax({
        url: "register/country_dropdown",
        type: "POST",
        data: {
            country_id : country_id    
        },
        cache: false,
        success : function(result) {
           // alert(1);
            const states = JSON.parse(result);
           // console.log(states);
            $('#state_dropdown').empty();
            var html="";
            $.each(states, function( key, state ) {
                //  console.log(state.state_id);
                //  console.log(state.state_name`   );
                //  console.log('#####');
                html+="<option value="+state.state_id+">";  //<option value="">pune</option>
                html+=state.state_name;
                html+="</option>";
                 //   html+="<option value="+state.state_id+">"+state.state_name+"</option>";
                });
                
            $('#state_dropdown').html(html);

          }
    });
 });    
   
}); //ready close


//state ajax
$(document).ready(function() {
    $('#state_dropdown').on('change', function() {
    //    alert(1);
        var state_id = this.value;
    //    console.log(this.value);
        console.log(state_id);

        $.ajax({
        url: "register/stateDropdown",
        type: "POST",
        data: {
            state_id : state_id    
        },
        cache: false,
        success : function(result) {
        // alert(111);
            const cities = JSON.parse(result);
        //   console.log(cities);
            $('#city_dropdown').empty();
            var html="";
            $.each(cities, function( key, city ) {
                  console.log(city.city_id);
                  console.log(city.city_name);
                  console.log('#####');
                html+="<option value="+city.city_id+">";
                html+=city.city_name;
                html+="</option>";
                 //  html+="<option value="+city.city_id+">"+city.city_name+"</option>";
                });

            $('#city_dropdown').html(html);

          }
    });//ajax close
 });   //onchange close 
});    //ready close
 



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
            $.each(courses, function( key, course ) {
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
   


  
// $('#university_dropdown').on('change', function() {
//     var state_id = this.value;
//     $.ajax({
//     url: "cities-by-state.php",
//     type: "POST",
//     data: {
//     state_id: state_id
//     },
//     cache: false,
//     success: function(result){
//     $("#city-dropdown").html(result);
//     }
// });
// });

</script>
    </body>
</html>
