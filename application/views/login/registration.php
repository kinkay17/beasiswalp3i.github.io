 <?php 
 if ( $regis['status'] == 'on'){ ?>

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Form Pendaftaran Beasiswa!</h1>
              </div>
            
              <form class="user" method="POST" action="<?= base_url ('home/registration'); ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Berapa nomor NISN kamu?</label>
      <input type="text" class="form-control" id="nisn" value="<?= set_value('nisn');?>" name="nisn">
      <?= form_error('nisn','<small class="text-danger pl-2" >','</small> ');?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Siapa nama lengkapmu?</label>
      <input type="text" class="form-control" id="nama" value="<?= set_value('nama');?>" name="nama">
      <?= form_error('nama','<small class="text-danger pl-2" >','</small> ');?>
    </div>
  
  </div>  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Tempat lahir kamu?</label>
      <input type="text" class="form-control" id="tmp_lahir" value="<?= set_value('tmp_lahir');?>" name="tmp_lahir">
      <?= form_error('tmp_lahir','<small class="text-danger pl-2" >','</small> ');?>
    </div>    
    <div class="form-group col-md-6">
      <label for="inputZip">Tanggal lahir kamu?</label>
      <input type="date" class="form-control" id="tgl_lahir" value="<?= set_value('tgl_lahir');?> "name="tgl_lahir">
      <?= form_error('tgl_lahir','<small class="text-danger pl-2" >','</small> ');?>
    </div>       
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Apa jenis kelaminmu?</label>
      <select id="jk" name="jk" value="<?= set_value('jk');?>" class="form-control">
        <option selected value="">Choose...</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <?= form_error('jk','<small class="text-danger pl-2" >','</small> ');?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Silahkan kamu ketik email-mu ya!</label>
      <input type="email" class="form-control" id="email" value="<?= set_value('email');?>" name="email">
      <?= form_error('email','<small class="text-danger pl-2" >','</small> ');?>
    </div>
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Nomor HP kamu juga ya!</label>
      <input type="text" class="form-control" value="<?= set_value('hp');?>" id="hp" name="hp">
      <?= form_error('hp','<small class="text-danger pl-2" >','</small> ');?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Dan ketik nomor WA kamu ya!</label>
      <input type="text" class="form-control" id="wa" value="<?= set_value('wa');?>" name="wa">
      <?= form_error('wa','<small class="text-danger pl-2" >','</small> ');?>
    </div>       
  </div> 
  <div class="form-group">
    <label for="inputAddress">Silahkan ketik alamat lengkap rumahmu ya!</label>
    <input type="text" class="form-control" id="alamat" value="<?= set_value('alamat');?>" name="alamat">
    <?= form_error('alamat','<small class="text-danger pl-2" >','</small> ');?>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Jenis Sekolahmu apa?</label>
      <select name="propinsi" id="propinsi" value="<?= set_value('propinsi');?>" class="form-control">
        <option value="">Choose...</option>
        <option value="SMK">SMK</option>
        <option value="SMA">SMA</option>
        <option value="MA">MA</option>
      </select>
      <?= form_error('kategori_sekolah','<small class="text-danger pl-2" >','</small> ');?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Apa jurusan di sekolahmu?</label>
      <input type="text" class="form-control" id="jurusan" value="<?= set_value('jurusan');?>" name="jurusan">
      <?= form_error('jurusan','<small class="text-danger pl-2" >','</small> ');?>
    </div>       
  </div>
  <div class="form-group">
    <label for="inputAddress">Dimana kamu bersekolah?</label>
    <select name="kota" id="kota" class="form-control">
        <option value="">Choose...</option>        
    </select>
    <?= form_error('id_sekolah','<small class="text-danger pl-2" >','</small> ');?>
  </div>
  <div class="form-group">
    <label for="inputAddress">Pilihan program Studi</label>
    <select id="prodi" name="prodi" class="form-control">
        <option value="" selected>Choose...</option>
        <option value="Office Management">Office Management</option>
        <option value="Computerized Accounting">Computerized Accounting</option>
        <option value="Informatic Computer">Informatic Computer</option>        
      </select>
      <?= form_error('prodi','<small class="text-danger pl-2" >','</small> ');?>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Password?</label>
      <input type="password" class="form-control" id="password1" name="password1">
      <?= form_error('password1','<small class="text-danger pl-2" >','</small> ');?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Repeat Password</label>
      <input type="password" class="form-control" id="password2" name="password2">
      
    </div>
  </div>

 
    
    <input type="hidden" class="form-control" id="tahapan" value="<?= $regis['ket']; ?>" name="tahapan">
   
   

  <button type="submit" class="btn btn-primary">Daftarkan Akun</button>
</form>

              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('home/forgotpassword'); ?>">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('home/login'); ?>">Sudah punya akun? Login!</a>
              </div>
              <div class="text-center">
                    <a class="small" href="<?= base_url(); ?>">Halaman Utama!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assett/lib/'); ?>jquery.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="<?= base_url('assett/lib/'); ?>jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script> 
<script src="<?= base_url('assett/lib/'); ?>jquery.chained.remote.js?v=1.0.0" type="text/javascript" charset="utf-8"></script> 
<script src="<?= base_url('assett/lib/'); ?>select2.min.js"></script> 
<script src="<?= base_url('assett/lib/'); ?>select2.min.css"></script> 

<script>
   $(document).ready(function() {
       $('select').select2();
   });

   $("#kota").remoteChained({
      parents : "#propinsi",
      url : "<?php echo site_url('home/get_kota'); ?>"
   });

   $("#kecamatan").remoteChained({
      parents : "#kota",
      url : "<?php echo site_url('home/get_kecamatan'); ?>"
   });

   $("#desa").remoteChained({
      parents : "#kecamatan",
      url : "<?php echo site_url('home/get_desa'); ?>"
   });
</script>

 <?php }else{ ?>
  <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
     <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
      <div class="col-lg">
        <div class="p-5">
         
        <div class="card mb-3">
        <img src="<?= base_url('assett/ooppss.png'); ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><b>Mohon Maaf</b></h5>
            <p class="card-text">Pendaftaran Beasiswa Sudah Ditutup.</p>
            <!--<p class="card-text"><small class="text-muted">Terimakasih</small></p>-->
        </div>
        </div>

          <div class="text-center">
            <a class="small" href="<?= base_url('home/forgotpassword'); ?>">Forgot Password?</a>
          </div>
          <div class="text-center">
            <a class="small" href="<?= base_url('home/login'); ?>">Already have an account? Login!</a>
          </div>
          <div class="text-center">
                    <a class="small" href="<?= base_url(); ?>">Halaman Utama!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
 <?php } ?> 
