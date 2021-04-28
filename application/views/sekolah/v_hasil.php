<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Hasil Beasiswa</h1>
<p class="mb-4">Data dibawah ini adalah data hasil beasiswa</p>
      
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
    <h6 class="m-0 font-weight-bold text-primary">Data Hasil Beasiswa</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama Lengkap</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Beasiswa</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama Lengkap</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Beasiswa</th>
          </tr>
        </tfoot>
        <tbody>
        <?php $no=1;?>
        <?php foreach($siswa as $s): ?>
          <tr>
            <td><?php echo $no++?></td>
            <td><?= $s['nisn'];?></td>
            <td><?= $s['nama'];?></td>         
            <?php foreach($hasil as $n): ?>
            <?php if($n['nisn'] == $s['nisn']){?>
            <td><?= $n['score']; ?></td>
            <td><?= $n['keterangan']; ?></td>
            <?php }else{ ?>
            <td><a href="<?= base_url();?>master/edit_sekolah?id=<?= $s['nisn'];?>" class="btn btn-danger btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Input Nilai</span>
            </a></td>
            <td>Belum Diinput</td>
            <?php }?>
            <?php endforeach; ?>
            <td>Tahap 2</td>
          </tr>
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