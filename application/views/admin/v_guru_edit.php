
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>User table</h6>
            </div>
            <div class="card-body px-3 pt-3 pb-4">
				<div class="table-responsive p-0">

				<form method="post" action="<?php echo base_url('Guru/guru_simpan_edit');?>">
				<div class="form-group">
					<label for="exampleInputId1">Id Guru</label>
					<input type="number" class="form-control" name="ids" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter id" value="<?php echo $guru->id_guru;?>">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">username</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $guru->username;?>">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" value="<?php echo $guru->password;?>">
				  </div>
				  <div class="form-group">
					<label for="exampleFormControlSelect1">Mapel</label>
					<select class="form-control" name="level" id="exampleFormControlSelect1">
					  <option>ipa</option>
						<option>mtk</option>
						<option>bhs</option>
						<option>sj</option>
					  
					</select>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
					  </div>

            </div>
          </div>
        </div>
      </div>
