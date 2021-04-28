        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		   
         
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['nisn']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['nama']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['email']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['jk']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['tmp_lahir']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['tgl_lahir']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['alamat']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Handphone</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['hp']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Whatsapp</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['wa']?></label>
                </div>
            </div>            
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Sekolah</label>
                <div class="col-sm-10">
                <?php foreach($msekolah as $m):?>	
                <?php if($m['id_sekolah'] == $detailsiswa['id_sekolah']){ ?>
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $m['nama_sekolah'];?></label>
                <?php }else{ ?>
                <?php } ?>  
                <?php endforeach;?>  
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['jurusan']?></label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Prodi</label>
                <div class="col-sm-10">
                <label for="staticEmail" class="col-sm-12 col-form-label"><?= $detailsiswa['prodi']?></label>
                </div>
            </div>   
            

			
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      