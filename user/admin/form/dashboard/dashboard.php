<?php 
  $idus= $_SESSION['id_admin'];
  $level= $_SESSION['level'];
 
  $prt=mysqli_query($conn, "SELECT * from toko where id_toko='$idus'")or die("salah");
  $data=mysqli_fetch_array($prt);
  $namauser=$data['pemilik_toko'];
  $status=$data['status'];
  $keterangan_status = [
    'masih dalam status '.$status_toko[$status].'<br>harap menunggu',
    'sudah menjadi '.$status_toko[$status].'<br>',
    'Saat ini akun toko anda sedang di '.$status_toko[$status].'<br>Silahkan hubungi admin untuk mengaktifkan kembali',
    'Saat ini akun toko anda telah di  '.$status_toko[$status].' oleh admin<br>',
    'pendaftaran akun toko anda telah  '.$status_toko[$status].' oleh admin<br>',
  ];
 ?>

<div class="col-md-12">

<div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <?php if ($status!=1) { ?>
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $namauser ?></h3>
              <h4>Pengelola <?php echo $level ?> <?php echo  $data['nama_toko'] ?></h4>
              <h5 class="widget-user-desc"><?php echo $keterangan_status[$status] ?> </h5>
            </div>
          <?php }else{ ?>
             <div class="widget-user-header bg-aqua-active">
              <h5 class="widget-user-desc">Selamat datang di halaman pengelola toko Markettplact Restoran dan Coffee Shop </h5>
              <h3 class="widget-user-username"><?php echo $namauser ?></h3>
              <h4>Pengelola <?php echo $level ?> <?php echo  $data['nama_toko'] ?></h4>
            </div>
          <?php } ?>
           <!--  <div class="widget-user-image">
              
              <img class="" src="../admin/images/user.jpg" alt="User Avatar">
            </div> -->
            <div class="box-footer">







      <div class="row" style="display:none">

        
        <a href="?m=barang">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa  fa-retweet"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Barang</span>
              <span class="info-box-number"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
                </div>
                  <span class="progress-description">
                    Kelola data barang
                  </span>
            </div>
          </div>
        </div>
      </a>
        
        <a href="?m=ongkir">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa  fa-retweet"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Ongkir</span>
              <span class="info-box-number"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
                </div>
                  <span class="progress-description">
                    Kelola data ongkir <br> sesuai dengan data wilayah
                  </span>
            </div>
          </div>
        </div>
      </a>
        
        <a href="?m=rekening">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa  fa-retweet"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Rekening</span>
              <span class="info-box-number"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
                </div>
                  <span class="progress-description">
                    Kelola data rekening anda
                  </span>
            </div>
          </div>
        </div>
      </a>
        
        <a href="?m=pesanan">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa  fa-retweet"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Pesanan</span>
              <span class="info-box-number"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
                </div>
                  <span class="progress-description">
                    Lihar pesanan dari pelanggan
                  </span>
            </div>
          </div>
        </div>
      </a>
        
        <a href="?m=transaksi">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa  fa-retweet"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Penjualan</span>
              <span class="info-box-number"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
                </div>
                  <span class="progress-description">
                    Pantau penjualan online
                  </span>
            </div>
          </div>
        </div>
      </a>
        
        <a href="?m=edit_toko">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa  fa-retweet"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Perbaharui Data Toko</span>
              <span class="info-box-number"></span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
                </div>
                  <span class="progress-description">
                    Perbaharui Data Toko Anda
                  </span>
            </div>
          </div>
        </div>
      </a>
      </div>









          
      







   
              <!-- /.row -->
            </div>
          </div>

    </div>