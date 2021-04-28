        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		  <?= $this->session->flashdata('message');?>
		<div class="row">
			<div class="col-lg-12">
				
				<form action="<?= base_url('master/edit_sekolah')?>" method="post">				
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Kategori Sekolah</label>
					<div class="col-sm-10">
                    <select name="kategori_sekolah" id="kategori_sekolah" class="form-control" >
                        <option value="" >Pilih Kategori</option> 
                        <option value="SMK" <?php if($editsekolah['kategori_sekolah']== "SMK"){ echo 'selected';}?> >SMK</option> 
                        <option value="SMA" <?php if($editsekolah['kategori_sekolah']== "SMA"){ echo 'selected';}?> >SMA</option> 
                        <option value="MA" <?php if($editsekolah['kategori_sekolah']== "MA"){ echo 'selected';}?> >MA</option>             
                    </select>
					<?= form_error('kategori_sekolah','<small class="text-danger pl-3" >','</small> ');?> 
					</div>
				</div>				
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Nama Sekolah</label>
					<div class="col-sm-10">
					<input type="hidden" class="form-control"  value="<?= $editsekolah['id_sekolah'];?>" name="id_sekolah" id="id_sekolah">
					  <input type="text" class="form-control"  value="<?= $editsekolah['nama_sekolah'];?>" name="nama_sekolah" id="nama_sekolah">
					  <?= form_error('nama_sekolah','<small class="text-danger pl-3" >','</small> ');?>  
					</div>
				</div>
				 <div class="form-group row">
				    <div class="col-sm-2"></div>
					<div class="col-sm-10">
					  <div class="form-check">
						<?php if($editsekolah['blokir'] == "1" ) {?>
						<input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked >
						<?php }else{ ?>
						<input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">
						<?php } ?>
						<label class="form-check-label" for="gridCheck1">
						  Active
						</label>
						
					  </div>
					</div>
				  </div>
				
				
				
				<div class="form-group row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Edit Sekolah</button>
					</div>
				</div>
				
				</form>
				
				
			</div>		
		</div>
		
		
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      