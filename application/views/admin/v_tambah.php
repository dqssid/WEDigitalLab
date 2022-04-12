<!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <form method="post" action="<?php echo base_url('user/petugas_tambah_aksi');?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Level</label>
    <select class="form-control" name="level" id="exampleFormControlSelect1">
      <option>admin</option>
      <option>petugas</option>
	  <option>pengguna</option>
      
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
	  </div>