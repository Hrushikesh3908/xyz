<html>
    <head>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
             <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

      <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-nnzkI2u2Dy6HMnzMIkh7CPd1KX445z38XIu4jG1jGw7x5tSL3VBjE44dY4ihMU1ijAQV930SPM12cCFrB18sVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col">
                  <h1 class="text-primary"> Employee Information</h1>
                </div>
                <div class=" col text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADDModal" data-whatever="">Add</button>

                </div>
            </div>
        </div>
    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Emp id </th>
            <th>Emp Name</th>
            <th>Department</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php   foreach($employee as $emp) {?>
        <tr>
            <td><?php echo $emp->eid; ?></td>
            <td><?php echo $emp->ename; ?></td>
            <td><?php echo $emp->edept; ?></td>
            <td><?php echo $emp->eaddress; ?></td>
            <td>
            <form method="">
                <a id="update" value="<?php echo $emp->eid; ?>" onclick="openSolution(<?php echo $emp->eid; ?>)" data-toggle="modal" data-target="#exampleModal" class="btn btn-info btn-xs updateData" ><i class="glyphicon glyphicon-pencil"></i></a>
                <a class="btn btn-info btn-xs bg-danger" href="<?php echo base_url('data/delete/'.$emp->eid) ?>"><i class="glyphicon glyphicon-remove"></i></a>

            </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>


<!--For update-->
<section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('data/update') ?>">
          <div class="form-group">
            <label for="recipient-id" class="col-form-label">Employee ID:</label>
            <input type="text" class="form-control" name="recipient-id" id="recipient-id">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Employee Name:</label>
            <input type="text" class="form-control" name="recipient-name" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-dept" class="col-form-label">Employee Department:</label>
            <input type="text" class="form-control" name="recipient-dept" id="recipient-dept">
          </div>
          <div class="form-group">
            <label for="recipient-address" class="col-form-label">Address:</label>
            <textarea class="form-control" name="recipient-address"  id="recipient-address"></textarea>
          </div>
          
          <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</section>

<!--For add-->
<section >
<div class="modal fade" id="ADDModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel123" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel123">New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('data/store') ?>">
          <div class="form-group">
            <label for="recipient-id" class="col-form-label">Employee ID:</label>
            <input type="text" name="recipient-id"  class="form-control" id="recipient-id">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Employee Name:</label>
            <input type="text" name="recipient-name"  class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-dept" class="col-form-label">Employee Department:</label>
            <input type="text" name="recipient-dept"  class="form-control" id="recipient-dept">
          </div>
          <div class="form-group">
            <label for="recipient-address" class="col-form-label">Address:</label>
            <textarea name="recipient-address"  class="form-control" id="recipient-address"></textarea>
          </div>

          <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
            
          <!-- </form> -->
      </div>
      
    </div>
  </div>
</div>
</section>



    </body>
</html>



<script>
  
  $(document).ready( function () {
    $('#table_id').DataTable();


} );

function openSolution(emp_id){
   // console.log('fsfsf', emp_id);

      $.ajax({
        url: "data/empDetails",
        type: "POST",
        data: {
            emp_id : emp_id    
        },
        cache: false,
        success : function(responce) {
            // alert(123);
            responce =$.parseJSON(responce);
             console.log(responce);
             $('#recipient-id').val(responce.eid);
             $('#recipient-name').val(responce.ename);
             $('#recipient-dept').val(responce.edept);
             $('#recipient-address').val(responce.eaddress);

          }
    }); 
}


//     $(document).ready(function() {
//         $('.updateData').on('click', function() {
//      //  var empID = this.val();
//        alert(11);
//       //  console.log('empID-> ', empID);
//             var emp_id = 5;

//         $.ajax({
//         url: "data/empDetails",
//         type: "POST",
//         data: {
//             emp_id : emp_id    
//         },
//         cache: false,
//         success : function(responce) {
//             responce =$.parseJSON(responce);
//              console.log(responce);
//              $('#recipient-id').val(responce.eid);
//              $('#recipient-name').val(responce.ename);
//              $('#recipient-dept').val(responce.edept);
//              $('#recipient-address').val(responce.eaddress);

//           }
//     });
//  });    
   
// }); 


</script>