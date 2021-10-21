<form method="post" action="<?php echo base_url('students/store');?>">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">University</label>
                <div class="col-md-9">  
                    <select name="uni_id" id="" class="form-control">
                            <option value="0" selected>Please Select University</option>
                            <?php   foreach($universities as $university) { ?>
                            <option value=<?php echo  $university->id ?> ><?php echo $university->uni_name ; ?> </option>
                            <?php  } ?>
                    </select> 
                </div>
            </div>
        </div>
        
           
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Name</label>
                <div class="col-md-9">
                    <textarea name="name" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-9">
                    <textarea name="email" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Mobile</label>
                <div class="col-md-9">
                    <input type="text" name="mobile" class="form-control">
                </div>
            </div>
        </div>
         
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>