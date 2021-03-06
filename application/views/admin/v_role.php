        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		 
		  <div class="row">
		   
			<div class="col-lg-6">
			<?= //validation_errors(); 
			form_error('menu','<div class="alert alert-danger" role="alert">','</div>');
		    ?>
			
			<?= 
			$this->session->set_flashdata('message');
			?>
			
			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal" >Add New Role</a>
			
			<table class="table table-hover">
			<caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1;?>
  <?php foreach($role as $r): ?>
    <tr>
      <th scope="row"><?php echo $no++?></th>
      <td><?= $r['role'];?></td>
      <td>
		<a href="<?= base_url('admin/roleaccess/') . $r['id'] ;?>" class="badge badge-warning">access</a>
		<a href="" class="badge badge-success">edit</a>
		<a href="" class="badge badge-danger">delete</a>
	  </td>
    </tr>    
  <?php endforeach; ?>
  </tbody>
			</table>
			
			</div>
		  </div>
		  
        </div>
		
		
		
		

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
	  
	  <!-- Modal Add Menu -->


<!-- Logout Modal-->
  <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		<form action="<?= base_url('admin/role')?>" method="post">
        <div class="modal-body">
		  <div class="form-group">
			<input type="text" class="form-control" 
			id="role" name="role" placeholder="Menu role">
		  </div>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
           <button type="submit" class="btn btn-primary" >Add</button>
        </div>
		</form>
      </div>
    </div>
  </div>