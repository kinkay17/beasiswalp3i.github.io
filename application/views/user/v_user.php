<?php
//ubah timezone menjadi jakarta
date_default_timezone_set("Asia/Jakarta");
//ambil jam dan menit
$jam = date('H:i');
//atur salam menggunakan IF
if ($jam > '05:30' && $jam < '10:00') {
    $salam = 'Pagi';
} elseif ($jam >= '10:00' && $jam < '15:00') {
    $salam = 'Siang';
} elseif ($jam < '18:00') {
    $salam = 'Sore';
} else {
    $salam = 'Malam';
}

?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  
 </div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  

</div>

<!-- Content Row -->
<div class="row">
<div class="col-xl-12 col-lg-7">

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><?= 'Selamat ' . $salam;?>!</h4>
  <p>Selamat datang di Beasiswa LP3I. </p>
  <hr>
  <p class="mb-0">Percayalah pada dirimu sendiri, maka anda akan bangga dengan hasilnya!</p>
</div>
</div>

</div>
<div class="row">

	<!-- Pie Chart -->
	<div class="col-xl-4 col-lg-5">
	<div class="card shadow mb-4">
	  <!-- Card Header - Dropdown -->
	  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Profil</h6>	
	  </div>
	  <!-- Card Body -->
	  <div class="card-body">

		<p><img src="<?= base_url('assett/back-end/img/profile/'). $biodata['image'] ?>" class="card-img" alt="..."></p>			
	    
		<h5 class="card-title"><?= $biodata['nisn'];?> - <?= $biodata['nama'];?></h5>
		<p class="card-text"><?= $biodata['email'];?></p>
		<p class="card-text"><small class="text-muted">Member since <a href="" class="badge badge-success"><?= date('d F Y', $biodata['date_created']);?></a></small></p>
	  </div>
	</div>
  </div>
  
  <!-- Area Chart -->
  <div class="col-xl-8 col-lg-7">
	<div class="card shadow mb-4">
	  <!-- Card Header - Dropdown -->
	  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Perhatian!</h6>		
	  </div>
	  <!-- Card Body -->
	  <div class="card-body">
		<p>Untuk tes seleksi Beasiswa kali ini akan dilaksanakan secara <b>Online</b> maka peserta wajib instal aplikasi <b>Edmodo</b> dihanphone, Selanjutnya silahkan daftar edmodo dengan memasukan kode kelas <b><u>4jx5d</u></b>.</p>
		<p class="mb-0">Untuk daftar lebih mudah silahkan ikuti tutorial berikut.</p>
		<a target="_blank" rel="nofollow" href="https://undraw.co/">Tutorial Daftar Edmodo &rarr;</a>
	  </div>	  
	</div>

	<div class="card shadow mb-4">
	  <!-- Card Header - Dropdown -->
	  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Jadwal Tes Beasiswa <?= $biodata['tahapan']?></h6>		
	  </div>
	  <!-- Card Body -->
	  <div class="card-body">
			<ul class="list-unstyled">
			<li class="media">
				<i class="far fa-file-alt mr-3 fa-3x"></i>
				<div class="media-body">
				<h5 class="mt-0 mb-1">Pelaksanaan Tes Beasiswa</h5>
				<p>Taggal 20 Januari 2021.</p>
				</div>
			</li>
			<li class="media my-4">
			<i class="fas fa-user-graduate mr-3 fa-3x"></i>
				<div class="media-body">
				<h5 class="mt-0 mb-1">Hasil Tes Beasiswa</h5>
				<p>Tanggal 25 Januari 2021.</p>
				<a href="<?= base_url('user/hasiltes')?>" class="badge badge-success">cek hasil</a>
				</div>
			</li>			
			</ul>
	  </div>	  
	</div>

  </div>



  

  
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->