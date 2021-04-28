        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		
		<div class="row">
			<div class="col-lg-8">
				
				<form action="<?= base_url('menu/edit_submenu')?>" method="post">
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">ID</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" value="<?= $editsubmenu['id'];?>" name="id" id="id" readonly>
					  <?= form_error('title','<small class="text-danger pl-3" >','</small> ');?> 
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Submenu Title</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" value="<?= $editsubmenu['title'];?>"  name="title" id="title">
					  <?= form_error('title','<small class="text-danger pl-3" >','</small> ');?> 
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Menu</label>
					<div class="col-sm-10">
					 <select name="menu_id" id="menu_id" class="form-control" >
						<option value="">Select Menu</option>
						<?php foreach($menu as $m):?>						
						<?php if($m['id'] == $editsubmenu['menu_id']){ ?>
						<option value="<?= $m['id']?>" selected ><?= $m['menu']?></option>
						<?php }else{ ?>
						<option value="<?= $m['id']?>"><?= $m['menu']?></option>
						<?php } ?>
						
						<?php endforeach;
						?>
					</select>
					<?= form_error('menu_id','<small class="text-danger pl-3" >','</small> ');?> 
					</div>
				</div>				
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Icon</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control"  value="<?= $editsubmenu['icon'];?>" name="icon" id="icon">
					  <?= form_error('icon','<small class="text-danger pl-3" >','</small> ');?>  
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Url</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control"  name="url" value="<?= $editsubmenu['url'];?>" id="url">
					  <?= form_error('url','<small class="text-danger pl-3" >','</small> ');?>  
					</div>
				</div>
				 <div class="form-group row">
				    <div class="col-sm-2"></div>
					<div class="col-sm-10">
					  <div class="form-check">
						<?php if($editsubmenu['is_active'] == "1" ) {?>
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
						<button type="submit" class="btn btn-primary">Edit Profile</button>
					</div>
				</div>
				
				</form>
				
				
			</div>		
		</div>
		
		
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      