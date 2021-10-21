<form method="post" action="<?php echo base_url('students/update1/'.$student->id);?>">
    <div class="row">
    <pre>
        <?php
           // print_r($product);
        ?>
    </pre>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">University</label>
                <div class="col-md-9">
                    <select name="uni_id" id="" class="form-control">
                        <option value="0" selected>Please select University</option>
                        <?php  foreach($universities as $university) { ?>
                        <option value=<?= $university->id ?> 
                            <?php 
                                     if($university->id==$student->uni_id)
                                    {
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
                <label class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" value="<?php echo $student->name; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-9">
                    <textarea name="email" class="form-control"><?php echo $student->email; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Mobile</label>
                <div class="col-md-9">
                    <textarea name="mobile" class="form-control"><?php echo $student->mobile; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>