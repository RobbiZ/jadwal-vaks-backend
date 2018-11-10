<div class="wrapper wrapper-content animated fadeInRight">
  <h3><b>MASUKKAN PERUBAHAN DATA JADWAL VAKSINASI</b></h3>
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
?>

<form class="form-horizontal" action="vaksinasi-simpan.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="vacid" value="<?php echo $vacid; ?>"/>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="plasmaname">PLASMA</label>
      <div class="controls"> 
        <select class="form-control" name="plasmacode">
          <option >Pilih Plasma</option>
          <?php
          echo "<option selected value='" .$plasmacode."'>" . $custname." - ".$plasmaname. "</option>";
          include '../koneksi.php';
          $sql = "SELECT * FROM plasma,customer WHERE plasma.custcode = customer.custcode ORDER BY custname, plasmaname";
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
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="tanggal" class="form-control" placeholder="Klik Ikon Kalender Di Sebelah Kiri Untuk Memilih Tanggal" value="<?php echo $tanggal;?>">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="jenis">JENIS</label>
      <div class="controls"> 
        <select class="form-control" name="jenis">
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
          <input class="touchspin3" type="text" value="<?php echo $populasi;?>" name="populasi" placeholder="Ketikkan Jumlah Populasi Ternak Disini">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="umur">UMUR</label>
        <div class="controls"> 
          <input class="touchspin3" type="text" value="<?php echo $umur;?>" name="umur" placeholder="Ketikkan Umur Ternak Disini">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="aplikasi">APLIKASI</label>
      <div class="controls"> 
        <select class="form-control" name="aplikasi">
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
        <select class="form-control" name="stockcode">
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
        <select class="form-control" name="pelaksana">
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
    <div class="col-sm-12 col-sm-10">
      <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;SIMPAN</button>
      <a class="btn btn-danger" href="home.php?hal=vaksinasi-data"><i class="fa fa-times"></i>&nbsp;BATAL </a>
    </div>
  </div>

</form>