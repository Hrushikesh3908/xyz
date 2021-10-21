<form method="post" action="<?php echo base_url('products/store');?>">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">category</label>
                <div class="col-md-9">
                
                <select name="cat_id" id="" class="form-control">
?>
                <option value="0" selected>Please select Category</option>
                <?php  foreach($category as $d) { ?>
                   <option value=<?= $d->id ?> ><?= $d->cat_name ; ?> </option>
                        <?php } ?>

             </select>
                </div>
            </div>
        </div>
        
         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
        </div>
           
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Price</label>
                <div class="col-md-9">
                    <textarea name="price" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>