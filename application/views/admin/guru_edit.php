	<div class="container">
<div class="card">
	<div class="card-header text-center">
	<h4>Edit Petugas</h4>
	</div>
	<div class="card-body">
	<a href="<?php echo base_url().'Guru/guru_edit' ?>" class='btn btn-sm btnlight
	btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
	<br/>
	<br/>
	<?php foreach($guru as $p){ ?>
	<form method="post" action="<?php echo base_url().'Guru/guru_edit';
	?>">
	<div class="form-group">
					<label for="exampleInputId1">Id Guru</label>
					<input type="number" class="form-control" name="ids" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter id" value="<?php echo $user->id_guru;?>">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">username</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $user->username;?>">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" value="<?php echo $user->password;?>">
				  </div>
				  <div class="form-group">
					<label for="exampleFormControlSelect1">Mapel</label>
					<select class="form-control" name="level" id="exampleFormControlSelect1">
					  <option>ipa</option>
						<option>mtk</option>
						<option>bhs</option>
						<option>sj</option>
					  
	<input type="submit" class="btn btn-primary" value="Simpan">
	</form>
	<?php } ?>
	</div>
	</div>
	</div>