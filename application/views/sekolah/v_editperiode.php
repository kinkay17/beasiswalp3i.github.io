        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <?= $this->session->flashdata('message');?>
		<div class="row">
			<div class="col-lg-12">
				
				<form action="<?= base_url('master/edit_periode')?>" method="post">			
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Tahun PMB</label>
					<div class="col-sm-10">
					<input type="hidden" class="form-control"  value="<?= $editperiode['id_periode'];?>" name="id_periode" id="id_periode">
					  <input type="text" class="form-control"  value="<?= $editperiode['tahun_pmb'];?>" name="tahun_pmb" id="tahun_pmb">
					  <?= form_error('tahun_pmb','<small class="text-danger pl-3" >','</small> ');?>  
					</div>
				</div>
                <div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control"  value="<?= $editperiode['ket'];?>" name="ket" id="ket">
					  <?= form_error('ket','<small class="text-danger pl-3" >','</small> ');?>  
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Target</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control"  value="<?= $editperiode['target'];?>" name="target" id="target">
					  <?= form_error('target','<small class="text-danger pl-3" >','</small> ');?>  
					</div>
				</div>
                <div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Tanggal Pelaksanaan</label>
					<div class="col-sm-10">
					  <input type="date" class="form-control"  value="<?= $editperiode['tgl_pelaksanaan'];?>" name="tgl_pelaksanaan" id="tgl_pelaksanaan">
					  <?= form_error('tgl_pelaksanaan','<small class="text-danger pl-3" >','</small> ');?>  
					</div>
				</div>
                <div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Tanggal Pengumuman</label>
					<div class="col-sm-10">
					  <input type="date" class="form-control"  value="<?= $editperiode['tgl_pengumuman'];?>" name="tgl_pengumuman" id="tgl_pengumuman">
					  <?= form_error('tgl_pengumuman','<small class="text-danger pl-3" >','</small> ');?>  
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Kategori Sekolah</label>
					<div class="col-sm-10">
                    <select name="status" id="status" class="form-control" >
                        <option value="" >Pilih Kategori</option> 
                        <option value="on" <?php if($editperiode['status']== "on"){ echo 'selected';}?> >Pendaftaran Dibuka</option> 
                        <option value="off" <?php if($editperiode['status']== "off"){ echo 'selected';}?> >Pendaftaran Ditutup</option>            
                    </select>
					<?= form_error('status','<small class="text-danger pl-3" >','</small> ');?> 
					</div>
				</div>
                <div class="form-group row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Update Periode</button>
					</div>
				</div>
				
				</form>
				
				
			</div>		
		</div>
		
		
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      