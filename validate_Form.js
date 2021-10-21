
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
    //     $( "#university" ).change(function() {
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
});

</script>