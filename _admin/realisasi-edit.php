<div class="wrapper wrapper-content animated fadeInRight">
  <h3><b>MASUKKAN DATA REALISASI VAKSINASI</b></h3>
</div>

<?php
    $vacid = $_GET["vacid"];
    include "../koneksi.php";
    $sql = "SELECT * FROM vaksinasi,user,product,plasma,customer WHERE vaksinasi.pelaksana = user.uid AND vaksinasi.stockcode=product.stockcode AND vaksinasi.plasmacode = plasma.plasmacode AND plasma.custcode = customer.custcode AND vacid ='$vacid'";
    $hasil = mysqli_query($kon,$sql);
    if (!$hasil ) die("Gagal query...");

    $data = mysqli_fetch_array($hasil);
    $plasmacode  = $data['plasmacode'];
    $tanggal     = $data['tanggal'];
    $jenis       = $data['jenis'];
    $populasi    = $data['populasi'];
    $umur        = $data['umur'];
    $aplikasi    = $data['aplikasi'];
    $stockcode   = $data['stockcode'];
    $pelaksana   = $data['pelaksana'];
    $custname    = $data['custname'];
    $plasmaname  = $data['plasmaname'];
    $productname = $data['productname'];
    $username    = $data['username'];
    $donumber    = $data['donumber'];
    $batch       = $data['batch'];
    $kmstart     = $data['kmstart'];
    $kmfinish    = $data['kmfinish'];
    $remark      = $data['remark'];
    $reschedule  = $data['reschedule'];
    $newdate     = $data['newdate'];
    $cancel      = $data['cancel'];
?>

<form class="form-horizontal" action="realisasi-simpan.php" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="plasmaname">PLASMA</label>
      <div class="controls"> 
        <select class="form-control" name="plasmacode" disabled="">
          <option >Pilih Plasma</option>
          <?php
          echo "<option selected value='" .$plasmacode."'>" . $custname." - ".$plasmaname. "</option>";
          include '../koneksi.php';
          $sql = "SELECT * FROM plasma,customer WHERE plasma.custcode = customer.custcode ORDER BY plasmaname";
          $query = mysqli_query($kon, $sql);
          while ($row = mysqli_fetch_array($query)) {
            echo "<option value='" . $row['plasmacode'] ."'>" . $row['custname']." - ".$row['plasmaname']. "</option>";
          }
          ?>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="tanggal">TANGGAL</label>
      <div class="controls">
      <input type="text" name="tanggal" class="form-control" placeholder="Klik Ikon Kalender Di Sebelah Kiri Untuk Memilih Tanggal" value="<?php echo $tanggal;?>" disabled="">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="jenis">JENIS</label>
      <div class="controls"> 
        <select class="form-control" name="jenis" disabled="">
          <option >Pilih Jenis Ternak</option>
          <option value="LAYER" <?php if ($jenis == "LAYER") echo "selected"; ?> >LAYER</option>
          <option value="BROILER" <?php if ($jenis == "BROILER") echo "selected"; ?> >BROILER</option>
          <option value="PEJANTAN" <?php if ($jenis == "PEJANTAN") echo "selected"; ?> >PEJANTAN</option>
          <option value="BREEDING" <?php if ($jenis == "BREEDING") echo "selected"; ?> >BREEDING</option>
          <option value="BEBEK" <?php if ($jenis == "BEBEK") echo "selected"; ?> >BEBEK</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="populasi">POPULASI</label>
        <div class="controls"> 
          <input class="form-control" type="text" value="<?php echo $populasi;?>" name="populasi" placeholder="Ketikkan Jumlah Populasi Ternak Disini" disabled="">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="umur">UMUR</label>
        <div class="controls"> 
          <input class="form-control" type="text" value="<?php echo $umur;?>" name="umur" placeholder="Ketikkan Umur Ternak Disini" disabled="">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="aplikasi">APLIKASI</label>
      <div class="controls"> 
        <select class="form-control" name="aplikasi" disabled="">
          <option>Pilih Cara Aplikasi Vaksinasi</option>
          <option value="SUBKUTAN" <?php if ($aplikasi == "SUBKUTAN") echo "selected"; ?> >SUBKUTAN</option>
          <option value="IM-DADA" <?php if ($aplikasi == "IM-DADA") echo "selected"; ?> >INTRAMUSCULER DADA</option>
          <option value="IM-PAHA" <?php if ($aplikasi == "IM-PAHA") echo "selected"; ?> >INTRAMUSCULER PAHA</option>
          <option value="T-MATA" <?php if ($aplikasi == "T-MATA") echo "selected"; ?> >TETES MATA</option>
          <option value="T-MULUT" <?php if ($aplikasi == "T-MULUT") echo "selected"; ?> >TETES MULUT</option>
          <option value="T-HIDUNG" <?php if ($aplikasi == "T-HIDUNG") echo "selected"; ?> >TETES HIDUNG</option>
          <option value="MINUM" <?php if ($aplikasi == "MINUM") echo "selected"; ?> >AIR MINUM</option>
          <option value="SPRAY" <?php if ($aplikasi == "SPRAY") echo "selected"; ?> >SPRAY</option>
          <option value="SAYAP" <?php if ($aplikasi == "SAYAP") echo "selected"; ?> >SAYAP</option>
        </select>
      </div>
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="productname">PRODUK</label>
      <div class="controls"> 
        <select class="form-control" name="stockcode" disabled="">
          <option>Pilih Produk</option>
          <?php
          echo "<option selected value='" .$stockcode."'>" . $productname."</option>";
          include '../koneksi.php';
          $sql = "SELECT * FROM product ORDER BY productname";
          $query = mysqli_query($kon, $sql);
          while ($row = mysqli_fetch_array($query)) {
            echo "<option value='" . $row['stockcode'] ."'>" . $row['productname']."</option>";
          }
          ?>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="username">PELAKSANA</label>
      <div class="controls"> 
        <select class="form-control" name="pelaksana" disabled="">
          <option>Pilih Pelaksana</option>
          <?php
          echo "<option selected value='" .$pelaksana."'>" . $username."</option>";
          include '../koneksi.php';
          $sql = "SELECT * FROM user WHERE role != 'admin' ORDER BY username";
          $query = mysqli_query($kon, $sql);
          while ($row = mysqli_fetch_array($query)) {
            echo "<option value='" . $row['uid'] ."'>" . $row['username']."</option>";
          }
          ?>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="donumber">DO NUMBER</label>
        <div class="controls"> 
          <input class="form-control" type="text" value="<?php echo $donumber;?>" name="donumber" placeholder="Ketikkan Nomor DO Disini">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="batch">BATCH NUMBER</label>
        <div class="controls"> 
          <input class="form-control" type="text" value="<?php echo $batch;?>" name="batch" placeholder="Ketikkan Nomor Batch Produk Obat/Vaksin Yang Digunakan Disini">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="kmstart">KM AWAL</label>
        <div class="controls"> 
          <input class="touchspin3" type="text" value="<?php echo $kmstart;?>" name="kmstart" placeholder="Ketikkan KM Awal Disini">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="kmfinish">KM AKHIR</label>
        <div class="controls"> 
          <input class="touchspin3" type="text" value="<?php echo $kmfinish;?>" name="kmfinish" placeholder="Ketikkan KM Akhir Disini">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="reschedule">RESCHEDULE</label>
      <div class="controls"> 
        <select class="form-control" name="reschedule">
          <option value="">Pilih Alasan Mengapa Jadwal Vaksinasi Reschedule / Dijadwalkan Ulang</option>
          <option value="A" <?php if ($reschedule == "A") echo "selected"; ?> >Ayam dalam pengobatan</option>
          <option value="B" <?php if ($reschedule == "B") echo "selected"; ?> >Ayam terlalu kecil</option>
          <option value="C" <?php if ($reschedule == "C") echo "selected"; ?> >Chick in mundur</option>
          <option value="D" <?php if ($reschedule == "D") echo "selected"; ?> >Jadwal padat</option>
          <option value="E" <?php if ($reschedule == "E") echo "selected"; ?> >Kurang vaksinator</option>
          <option value="F" <?php if ($reschedule == "F") echo "selected"; ?> >Mendahulukan kasus</option>
          <option value="G" <?php if ($reschedule == "G") echo "selected"; ?> >Permintaan peternak</option>
          <option value="H" <?php if ($reschedule == "H") echo "selected"; ?> >Lain-lain</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="newdate">TANGGAL BARU (RESCHEDULE / PENJADWALAN ULANG)</label>
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="newdate" class="form-control" placeholder="Klik Ikon Kalender Di Sebelah Kiri Untuk Memilih Tanggal Baru" value="<?php echo $newdate;?>">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="cancel">CANCEL</label>
      <div class="controls"> 
        <select class="form-control" name="cancel">
          <option value="">Pilih Alasan Mengapa Jadwal Vaksinasi Cancel / Dibatalkan</option>
          <option value="1" <?php if ($cancel == "1") echo "selected"; ?> >Dikerjakan orang lain</option>
          <option value="2" <?php if ($cancel == "2") echo "selected"; ?> >Sudah dipanen</option>
          <option value="3" <?php if ($cancel == "3") echo "selected"; ?> >Vaksin hatchery</option>
          <option value="4" <?php if ($cancel == "4") echo "selected"; ?> >Lain-lain</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="remark">REMARK</label>
        <div class="controls"> 
          <input type="text" class="form-control" type="text" value="<?php echo $remark;?>" name="remark" placeholder="Ketikkan Keterangan Disini (Jika Diperlukan)">
        </div>
    </div>
  </div>

  <input type="hidden" name="vacid" value="<?php echo $vacid; ?>"/>
  <input type="hidden" name="plasmacode" value="<?php echo $plasmacode; ?>"/>
  <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>"/>
  <input type="hidden" name="jenis" value="<?php echo $jenis; ?>"/>
  <input type="hidden" name="populasi" value="<?php echo $populasi; ?>"/>
  <input type="hidden" name="umur" value="<?php echo $umur; ?>"/>
  <input type="hidden" name="aplikasi" value="<?php echo $aplikasi; ?>"/>
  <input type="hidden" name="stockcode" value="<?php echo $stockcode; ?>"/>
  <input type="hidden" name="pelaksana" value="<?php echo $pelaksana; ?>"/>
  <input type="hidden" name="username" value="<?php echo $username; ?>"/>

  <div class="form-group"> 
    <div class="col-sm-12 col-sm-10">
      <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;SIMPAN</button>
      <a class="btn btn-danger" href="home.php?hal=realisasi-data"><i class="fa fa-times"></i>&nbsp;BATAL </a>
    </div>
  </div>

</form>