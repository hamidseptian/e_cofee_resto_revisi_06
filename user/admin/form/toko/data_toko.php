




















<?php 

 ?><div class="box-header with-border">
  <h3 class="box-title">Data Toko</h3>

  <div class="box-tools pull-right">
    <!-- <a href="" class="btn btn-default btn-sm"  target="_blank">Print Data Paket</a> -->
    <!-- <a href="#" class="btn btn-default btn-sm"  data-toggle="modal" data-target="#addballroom">Print Data Toko</a> -->
  </div>
</div>

<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#daftar" data-toggle="tab">Pendaftaran</a></li>
              <li><a href="#mitra" data-toggle="tab">Mitra</a></li>
              <li><a href="#suspend" data-toggle="tab">Toko di suspend</a></li>
              <li><a href="#pm" data-toggle="tab">Toko sudah putus mitra</a></li>
            
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="daftar">
                <?php 
                  $q1=mysqli_query($conn, "SELECT * from toko where status in('0','4')  order by status asc, id_toko desc");
                  $no=1;
                 ?>

                 <table class="table table-striped table-bordered" id="example1" width="100%">
                    <thead>
                      <tr>
                        <td>No</td>
                        
                        <td>Nama Toko</td>
                        <td>Jenis Konveksi</td>
                        <td>Alamat Toko</td>
                        <td>No HP Toko</td>
                        <td>Username</td>
                        <td>Status</td>
                        <td>Option</td>
                      </tr>
                    </thead>
                  <?php 
                  while ($d1=mysqli_fetch_array($q1)) { 
                    ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                   
                    <td><?php echo $d1['nama_toko'] ?></td>
                   
                    <td><?php echo $d1['jenis_toko'] ?></td>
                    <td><?php echo $d1['alamat_toko'] ?></td>
                    <td><?php echo $d1['nohp_toko'] ?></td>
                    <td><?php echo $d1['username'] ?></td>
                    <td><?php echo $status_toko[$d1['status']] ?></td>
                    <td>
                      <?php 
                      if ($d1['status']=="0") { ?>
                      
                      <a href="form/toko/acc_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('setujui menjadi mitra.?')">Setujui</a>
                      <a href="form/toko/tolak_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Tolak</a>
                        
                      <?php }
                      elseif ($d1['status']=="1") { ?>
                      
                      <a href="form/toko/suspend_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('suspend mitra.?')">Suspend Toko</a>
                      <a href="form/toko/pm_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Putuskan mitra.?')">Putus Mitra Toko</a>
                        
                      <?php }
                      elseif ($d1['status']=="2") { ?>
                      <a href="form/toko/acc_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Aktifkan mitra kembali.?')">Aktifkan Kembali</a>
                      <a href="form/toko/pm_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Putuskan mitra.?')">Putus Mitra Toko</a>
                        
                      <?php }
                      else { ?>
                          <a href="form/toko/hapus_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>
                      <?php } ?>
                     
                    </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="mitra">
                <?php 
                  $q1=mysqli_query($conn, "SELECT * from toko where status in('1') order by id_toko desc");
                  $no=1;
                 ?>

                 <table class="table table-striped table-bordered" id="example3" width="100%">
                    <thead>
                      <tr>
                        <td>No</td>
                        
                        <td>Nama Toko</td>
                        <td>Jenis Konveksi</td>
                        <td>Alamat Toko</td>
                        <td>No HP Toko</td>
                        <td>Username</td>
                        <td>Status</td>
                        <td>Option</td>
                      </tr>
                    </thead>
                  <?php 
                  while ($d1=mysqli_fetch_array($q1)) { 
                    ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                   
                    <td><?php echo $d1['nama_toko'] ?></td>
                   
                    <td><?php echo $d1['jenis_toko'] ?></td>
                    <td><?php echo $d1['alamat_toko'] ?></td>
                    <td><?php echo $d1['nohp_toko'] ?></td>
                    <td><?php echo $d1['username'] ?></td>
                    <td><?php echo $status_toko[$d1['status']] ?></td>
                    <td>
                      <?php 
                      if ($d1['status']=="0") { ?>
                      
                      <a href="form/toko/acc_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('setujui menjadi mitra.?')">Setujui</a>
                      <a href="form/toko/tolak_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Tolak</a>
                        
                      <?php }
                      elseif ($d1['status']=="1") { ?>
                      
                      <a href="form/toko/suspend_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('suspend mitra.?')">Suspend Toko</a>
                      <a href="form/toko/pm_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Putuskan mitra.?')">Putus Mitra Toko</a>
                        
                      <?php }
                      elseif ($d1['status']=="2") { ?>
                      <a href="form/toko/acc_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Aktifkan mitra kembali.?')">Aktifkan Kembali</a>
                      <a href="form/toko/pm_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Putuskan mitra.?')">Putus Mitra Toko</a>
                        
                      <?php }
                      else { ?>
                          <a href="form/toko/hapus_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>
                      <?php } ?>
                     
                    </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="suspend">
                <?php 
                  $q1=mysqli_query($conn, "SELECT * from toko where status in('2') order by status asc");
                  $no=1;
                 ?>

                 <table class="table table-striped table-bordered" id="example4" width="100%">
                    <thead>
                      <tr>
                        <td>No</td>
                        
                        <td>Nama Toko</td>
                        <td>Jenis Konveksi</td>
                        <td>Alamat Toko</td>
                        <td>No HP Toko</td>
                        <td>Username</td>
                        <td>Status</td>
                        <td>Option</td>
                      </tr>
                    </thead>
                  <?php 
                  while ($d1=mysqli_fetch_array($q1)) { 
                    ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                   
                    <td><?php echo $d1['nama_toko'] ?></td>
                   
                    <td><?php echo $d1['jenis_toko'] ?></td>
                    <td><?php echo $d1['alamat_toko'] ?></td>
                    <td><?php echo $d1['nohp_toko'] ?></td>
                    <td><?php echo $d1['username'] ?></td>
                    <td><?php echo $status_toko[$d1['status']] ?></td>
                    <td>
                      <?php 
                      if ($d1['status']=="0") { ?>
                      
                      <a href="form/toko/acc_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('setujui menjadi mitra.?')">Setujui</a>
                      <a href="form/toko/tolak_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Tolak</a>
                        
                      <?php }
                      elseif ($d1['status']=="1") { ?>
                      
                      <a href="form/toko/suspend_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('suspend mitra.?')">Suspend Toko</a>
                      <a href="form/toko/pm_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Putuskan mitra.?')">Putus Mitra Toko</a>
                        
                      <?php }
                      elseif ($d1['status']=="2") { ?>
                      <a href="form/toko/acc_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Aktifkan mitra kembali.?')">Aktifkan Kembali</a>
                      <a href="form/toko/pm_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Putuskan mitra.?')">Putus Mitra Toko</a>
                        
                      <?php }
                      else { ?>
                          <a href="form/toko/hapus_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>
                      <?php } ?>
                     
                    </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <div class="tab-pane" id="pm">
                <?php 
                  $q1=mysqli_query($conn, "SELECT * from toko where status in('3') order by status asc");
                  $no=1;
                 ?>

                 <table class="table table-striped table-bordered" id="example5" width="100%">
                    <thead>
                      <tr>
                        <td>No</td>
                        
                        <td>Nama Toko</td>
                        <td>Jenis Konveksi</td>
                        <td>Alamat Toko</td>
                        <td>No HP Toko</td>
                        <td>Username</td>
                        <td>Status</td>
                        <td>Option</td>
                      </tr>
                    </thead>
                  <?php 
                  while ($d1=mysqli_fetch_array($q1)) { 
                    ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                   
                    <td><?php echo $d1['nama_toko'] ?></td>
                   
                    <td><?php echo $d1['jenis_toko'] ?></td>
                    <td><?php echo $d1['alamat_toko'] ?></td>
                    <td><?php echo $d1['nohp_toko'] ?></td>
                    <td><?php echo $d1['username'] ?></td>
                    <td><?php echo $status_toko[$d1['status']] ?></td>
                    <td>
                      <?php 
                      if ($d1['status']=="0") { ?>
                      
                      <a href="form/toko/acc_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('setujui menjadi mitra.?')">Setujui</a>
                      <a href="form/toko/tolak_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Tolak</a>
                        
                      <?php }
                      elseif ($d1['status']=="1") { ?>
                      
                      <a href="form/toko/suspend_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('suspend mitra.?')">Suspend Toko</a>
                      <a href="form/toko/pm_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Putuskan mitra.?')">Putus Mitra Toko</a>
                        
                      <?php }
                      elseif ($d1['status']=="2") { ?>
                      <a href="form/toko/acc_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Aktifkan mitra kembali.?')">Aktifkan Kembali</a>
                      <a href="form/toko/pm_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-info btn-xs" onclick="return confirm('Putuskan mitra.?')">Putus Mitra Toko</a>
                        
                      <?php }
                      else { ?>
                          <a href="form/toko/hapus_toko.php?id=<?php echo $d1['id_toko'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>
                      <?php } ?>
                     
                    </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>




          <hr>
<hr>
