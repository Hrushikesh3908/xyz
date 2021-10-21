<form method="post" action="<?php echo base_url('register/update/'.$register->id);?>">
    <div class="row">
    <pre>
        <?php
           // print_r($product);
        ?>
    </pre>
        
         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" value="<?php echo $register->name; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-9">
                    <textarea name="email" class="form-control"><?php echo $register->email; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Mobile</label>
                <div class="col-md-9">
                    <textarea name="mobile" class="form-control"><?php echo $register->mobile; ?></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">University</label>
                <div class="col-md-9">
                    <select name="uni_id" id="" class="form-control">
                        <option value="0" selected>Please select University</option>
                        <?php  foreach($universities as $university) { ?>
                        <option value=<?= $university->id ?> 
                            <?php 
                                     if($university->id==$register->uni_id){
                                         echo "selected";
                                     }  
                            ?>
                        ><?= $university->uni_name ; ?> </option>
                                <?php } ?>

                    </select>    
                 </div>
            </div>
        </div> 
        
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Course</label>
                <div class="col-md-9">
                   <select name="course_id" id="" class="form-control">
                       <option value="0" selected>Please Select Course</option>
                       <?php foreach($course as $cou) { ?>
                       <option value=<?= $cou->courseID ; ?> 
                       <?php 
                                if($cou->courseID ==$register->course_id){ echo "selected" ; } ?> > <?php echo $cou->courseName ;?> </option>
                       <?php } ?>
                   </select>
                 </div>
            </div>
        </div> 
        

        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>