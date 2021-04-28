<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Peserta Beasiswa</h1>
<p class="mb-4">Data dibawah ini adalah daftar peserta beasiswa</p>
      
      <?php 
      //form validation
      if(validation_errors())
			{?>
				<div class="alert alert-danger" role="alert">
				<?= validation_errors();?>
				</div>
				
			<?php }?>
      <?= 
			//validasi berhasil
			$this->session->set_flashdata('message');
			?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Beasiswa</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Beasiswa</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
        <?php $no=1;?>
        <?php foreach($siswa as $s): ?>
          <?php if($s['nisn']=='lp3i'){

          }else{?>
            <tr>
            <td><?php echo $no++?></td>
            <td><?= $s['nisn'];?></td>
            <td><?= $s['nama'];?></td>
            <td><?= $s['nama_sekolah'];?></td>
            <td>Tahap 2</td>
            <td><a href="<?= base_url();?>master/detail_siswa?id=<?= $s['id'];?>" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Detail</span>
                  </a>
            </td>
          </tr>
        <?php  }?>         

          <?php endforeach; ?>     
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->