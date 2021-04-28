        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		 
		  
		<div class="row">
			<div class="col-lg-6">
			<?= $this->session->flashdata('message');?>
			<form action="<?= base_url('menu/edit_menu') ?>" method="post">
			
				<div class="form-group">
					<label for="currentpassword">Menu</label>
					<input type="hidden" class="form-control" value="<?= $editmenu['id']?>"id="id" 
					name="id">
					<input type="text" class="form-control" value="<?= $editmenu['menu']?>" id="menu" 
					name="menu">
					<?= form_error('menu','<small class="text-danger pl-3" >','</small> ');?>  
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Edit Menu</button>
				</div>
			
			</form>
			</div>
		</div>
		
		  	
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      