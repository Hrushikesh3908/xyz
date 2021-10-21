<form method="post" action="<?php echo base_url('products/update/'.$product->id);?>">
    <div class="row">
    <pre>
        <?php
           // print_r($product);
        ?>
    </pre>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Category Id</label>
                <div class="col-md-9">
                    <select name="cat_id" id="" class="form-control">

                        <option value="0" selected>Please select Category</option>
                        <?php  foreach($categories as $category) { ?>
                        <option value=<?= $category->id ?> 
                            <?php 
                                    if($category->id==$product->cat_id){
                                        echo "selected";
                                    }
                            ?>
                        ><?= $category->cat_name ; ?> </option>
                                <?php } ?>

                    </select>    
                 </div>
            </div>
        </div>
        
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" value="<?php echo $product->title; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control"><?php echo $product->description; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Price</label>
                <div class="col-md-9">
                    <textarea name="price" class="form-control"><?php echo $product->price; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>