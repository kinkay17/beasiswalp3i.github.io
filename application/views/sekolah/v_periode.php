<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Periode</h1>
<p class="mb-4">Data dibawah ini tahun PMB berjalan untuk beasiswa lp3i</p>
      
      <?php 
      //form validation
      if(validation_errors()){?>
				<div class="alert alert-danger" role="alert">
				<?= validation_errors();?>
				</div>				
			<?php }?>

      <?= $this->session->flashdata('message'); ?>
   


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tahun PMB</th>
            <th>Keterangan</th>
            <th>Target</th>
            <th>Pelaksanaan</th>
            <th>Pengumuman</th>
            <th>Status Pendaftaran</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tahun PMB</th>
            <th>Keterangan</th>
            <th>Target</th>
            <th>Pelaksanaan</th>
            <th>Pengumuman</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
        <?php $no=1;?>
        <?php foreach($periode as $s): ?> 
          <tr>
            <td><?= $s['tahun_pmb'];?></td>
            <td><?= $s['ket'];?></td>
            <td><?= $s['target'];?></td>
            <td><?= $s['tgl_pelaksanaan'];?></td>
            <td><?= $s['tgl_pengumuman'];?></td>
            <?php if($s['status']=='on'){?>
            <td class="table-success">Pendaftaran Dibuka</td>
            <?php }else{ ?>
            <td class="table-danger">Pendaftaran Ditutup</td>
            <?php } ?>
            <td><a href="<?= base_url();?>master/edit_periode?id=<?= $s['id_periode'];?>" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Update</span>
                  </a></td>
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

