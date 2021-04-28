        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
		  
		  <div class="row">
			<div class="col-lg-6">
				<?= $this->session->flashdata('message');?>
			</div>		  
		  </div>
		  
		  <div class="card mb-3" style="max-width: 540px;">
		  <div class="row no-gutters">
			<div class="col-md-4">
			  <img src="<?= base_url('assett/back-end/img/profile/'). $biodata['image'] ?>" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
			  <div class="card-body">
				<h5 class="card-title"><?= $biodata['nama'];?></h5>
				<p class="card-text"><?= $biodata['email'];?></p>
				<p class="card-text"><small class="text-muted">Member since <a href="" class="badge badge-success"><?= date('d F Y', $biodata['date_created']);?></a></small></p>
			  </div>
			</div>
		  </div>
       	</div>

		

		</div>

			
        <!-- /.container-fluid -->

		
		

      </div>
      <!-- End of Main Content -->

      