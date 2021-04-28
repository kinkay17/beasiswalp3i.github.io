<?php if($hasil){ 

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Hasil Tes</h1>
  
 </div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  

</div>

<div class="row">

  
  <!-- Area Chart -->
  <div class="col-xl-12 col-lg-7">
	<div class="card shadow mb-4">
	  <!-- Card Header - Dropdown -->
	  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Pengumunan Hasil Tes</h6>		
	  </div>
	  <!-- Card Body -->
	  <div class="card-body center text-left">
	  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NISN</th>
	  <th scope="col">:</th>
      <th scope="col"><?= $hasil['nisn']?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Nama Lengkap</th>
	  <th scope="row">:</th>
      <td><?= $hasil['nama']?></td>
      
    </tr>
    <tr>
      <th>Asal Sekolah</th>
	  <th scope="col">:</th>
      <td><?= $hasil['nama_sekolah']?></td>
    </tr>
	<tr>
      <th>Progam Studi Yang Diajukan</th>
	  <th scope="col">:</th>
      <td><?= $hasil['prodi']?></td>
    </tr>
	<tr>
      <th>Tahapan Beasiswa</th>
	  <th scope="col">:</th>
      <td><?= $hasil['tahapan']?></td>
    </tr>
    <tr>
      <th>Keterangan</th>
	    <th scope="col">:</th>
      <td class="table-success"><?= $hasil['keterangan']?></td>
    </tr>
	<tr>
      <th>Wawancara</th>
	    <th scope="col">:</th>
      <td><?= tgl_indo($hasil['hari'])?></td>
    </tr>
	<tr>
    <th>Jam</th>
	  <th scope="col">:</th>
    <td><?= $hasil['jam']?></td>
  </tr>
  <tr>
    <th>Lokasi Wawancara</th>
	  <th scope="col">:</th>
    <td>Kampus LP3I College Karawang</td>
  </tr>
  </tbody>
</table>
	  </div>	  
	</div>	

</div>



  

  
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php }else{ ?>

  <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Hasil Tes</h1>
  
 </div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  

</div>

<div class="row">

  
  <!-- Area Chart -->
  <div class="col-xl-12 col-lg-7">
	<div class="card shadow mb-4">
	  <!-- Card Header - Dropdown -->
	  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Pengumunan Hasil Tes</h6>		
	  </div>
	  <!-- Card Body -->
	  <div class="card-body center text-center">   
	  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assett/nodata.png')?>" alt="">
      </div> 
    <p>Mohon maaf <b>Data Hasil Tes</b> tidak ditemukan </p>
		<p class="mb-0">Untuk mengetahui lebih lanjut silahkan hubungi melalaui whatsapp.</p>
		<a target="_blank" rel="nofollow" href="https://api.whatsapp.com/send?phone=6281281221303&text=Hallo%20kak%20saya%20ingin%20tau%20tentang%20hasil%20beasiswa%20lp3i.">Join whatsapp &rarr;</a>
	  </div>	  
	</div>	

</div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php } ?>
