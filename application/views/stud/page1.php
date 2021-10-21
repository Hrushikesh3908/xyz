<style>
        .section{
            background-image:url('assets/images/head.pn');
            background-position:cover;
            background-repeat:no-repeat;
            background-position:center;
            
        }
</style>

<div class="section">   
<div class="row">
    <div class="col-lg-12">           
        <h2>Students Information           
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url('students/create') ?>"> Create New Student</a>
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>University</th>
          <th>Action</th>

      </tr>
  </thead>
    
  <tbody>
       <?php foreach ($data as $student) { ?>      
      <tr>
            <td><?php echo $student->id; ?></td>
           <td><?php echo $student->name; ?></td>   
          <td><?php echo $student->email; ?></td>
          <td><?php  echo $student->mobile;  ?></td>
          <td><?php  echo $student->uni_name;  ?></td>          
      <td>
        <form method="DELETE" action="<?php echo base_url('students/delete1/'.$student->id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('students/edit1/'.$student->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>

    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    
</div>

</div>