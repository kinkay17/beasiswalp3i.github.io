<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sekolah</h1>
<p class="mb-4">Data dibawah ini adalah daftar sekolah yang ada di Kabupaten Karawang</p>
      
      <?php 
      //form validation
      if(validation_errors())
			{?>
				<div class="alert alert-danger" role="alert">
				<?= validation_errors();?>
				</div>
				
			<?php }?>

      <?= $this->session->flashdata('message'); ?>

      
<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModalSekolah" >Tambah Sekolah</a>

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
            <th>No</th>
            <th>Kategori Sekolah</th>
            <th>Nama Sekolah</th>
            <th>Blokir</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Kategori Sekolah</th>
            <th>Nama Sekolah</th>
            <th>Blokir</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
        <?php $no=1;?>
        <?php foreach($sekolah as $s): ?>
          <tr>
            <td><?php echo $no++?></td>
            <td><?= $s['kategori_sekolah'];?></td>
            <td><?= $s['nama_sekolah'];?></td>
            <td><?php if($s['blokir']=='1'){
                echo "No";
            }else{
                echo "Yes";
            }?></td>
            <td><a href="<?= base_url();?>master/edit_sekolah?id=<?= $s['id_sekolah'];?>" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                  <a href="<?= base_url();?>master/hapus_sekolah?id=<?= $s['id_sekolah'];?>" class="btn btn-danger btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Hapus</span>
                  </a>
            </td>
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


<!-- Logout Modal-->
<div class="modal fade" id="newMenuModalSekolah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sekolah</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
              <form action="<?= base_url('master/index')?>" method="post">
              <div class="modal-body">
            
            <div class="form-group">
            <select name="kategori_sekolah" id="kategori_sekolah" class="form-control" >
              <option value="">Pilih Kategori</option> 
              <option value="SMK">SMK</option> 
              <option value="SMA">SMA</option> 
              <option value="MA">MA</option>             
            </select>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" 
            id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah">
            </div>            
            <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked >
              <label class="form-check-label" for="gridCheck">
              Active ?
              </label>
            </div>
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