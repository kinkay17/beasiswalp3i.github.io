        <!-- Begin Page Content -->
        <div class="container-fluid">

         <!-- Page Heading -->
		 <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            
          </div>


		   <!-- Content Row -->
		   <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
	<div class="card-body">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Office Management</div>
		  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $om; ?></div>
		  <a href="<?= base_url();?>admin/dataom" class="badge badge-success">cek data</a>
		</div>
		<div class="col-auto">
		  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
	<div class="card-body">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Informatic Computer</div>
		  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ic; ?></div>
		  <a href="<?= base_url();?>admin/dataic" class="badge badge-success">cek data</a>
		</div>
		<div class="col-auto">
		  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
	<div class="card-body">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Computerized Accounting</div>
		  <div class="row no-gutters align-items-center">
			<div class="col-auto">
			 <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ca; ?></div>
			 <a href="<?= base_url();?>admin/dataca" class="badge badge-success">cek data</a>
			</div>			
		  </div>
		</div>
		<div class="col-auto">
		  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
	<div class="card-body">
	  <div class="row no-gutters align-items-center">
		<div class="col mr-2">
		  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">All Program Studi</div>
		  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all; ?></div>
		  <a href="<?= base_url();?>master/siswa" class="badge badge-success">cek data</a>
		</div>
		<div class="col-auto">
		  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
		</div>
	  </div>
	</div>
  </div>
</div>

</div>

<!-- Content Row -->
<div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Progress Target <?= $tahap['target'];?> Peserta/Sekolah</h6>
                </div>
                <div class="card-body">
				
				<?php foreach($msekolah as $m): 
				$biodata = $this->db->get_where('biodata', ['id_sekolah' => $m['id_sekolah'], 'tahapan' => $tahap['ket']] )->num_rows(); 

				$total = $biodata/$tahap['target']*100?>	
				<?php if($biodata){ ?>
					<h4 class="small font-weight-bold"><?= $m['nama_sekolah']; ?><span class="float-right">Total : <?= $biodata; ?></span> <a href="<?= base_url();?>admin/siswasekolah?id=<?= $m['id_sekolah'];?>" class="badge badge-success">cek data</a></h4>
                  <div class="progress mb-4">
				   
                    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $total?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
				<?php }else{ ?>

				<?php } ?>
				  
				 
				<?php endforeach; ?>
                </div>
               </div>

              

            </div>

            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      