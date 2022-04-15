
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Materi table</h6>
            </div>
            <div class="card-body px-3 pt-3 pb-4">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
				<a href="<?php echo base_url().'materi/materi_tambah' ?>" class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i> Petugas Baru</a>
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mapel</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach($Materi as $u){
                      ?>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $no;?></h6>
                            <p class="text-xs text-secondary mb-0"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $u->username; ?></p>
                        <!--<p class="text-xs text-secondary mb-0"></p>-->
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $u->mapel; ?></span>
                      </td>
                     
                      <td class="align-middle">
                        <a href="<?php echo base_url().'guru/guru_edit/'.$u->id_guru; ?>" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
                         
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="<?php echo base_url('guru/guru_hapus/'.$u->id_guru); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                          
                        </a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
