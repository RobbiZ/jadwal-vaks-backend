<div class="wrapper wrapper-content animated fadeInRight">
  <h3><b>MASUKKAN DATA JADWAL VAKSINASI BARU</b></h3>
</div>

<form class="form-horizontal" action="vaksinasi-simpan.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="plasmaname">PLASMA</label>
      <div class="controls"> 
        <select class="form-control" name="plasmacode">
          <option value="A">Pilih Plasma</option>
          <?php
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
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="tanggal" class="form-control" placeholder="Klik Ikon Kalender Di Sebelah Kiri Untuk Memilih Tanggal">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="jenis">JENIS</label>
      <div class="controls"> 
        <select class="form-control" name="jenis">
          <option value="0">Pilih Jenis Ternak</option>
          <option value="LAYER">LAYER</option>
          <option value="BROILER">BROILER</option>
          <option value="PEJANTAN">PEJANTAN</option>
          <option value="BREEDING">BREEDING</option>
          <option value="BEBEK">BEBEK</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="populasi">POPULASI</label>
        <div class="controls"> 
          <input class="touchspin3" type="text" value="" name="populasi" placeholder="Ketikkan Jumlah Populasi Ternak Disini">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="umur">UMUR</label>
        <div class="controls"> 
          <input class="touchspin3" type="text" value="" name="umur" placeholder="Ketikkan Umur Ternak Disini">
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="aplikasi">APLIKASI</label>
      <div class="controls"> 
        <select class="form-control" name="aplikasi">
          <option value="0">Pilih Cara Aplikasi Vaksinasi</option>
          <option value="SUBKUTAN">SUBKUTAN</option>
          <option value="IM-DADA">INTRAMUSCULER DADA</option>
          <option value="IM-PAHA">INTRAMUSCULER PAHA</option>
          <option value="T-MATA">TETES MATA</option>
          <option value="T-MULUT">TETES MULUT</option>
          <option value="T-HIDUNG">TETES HIDUNG</option>
          <option value="MINUM">AIR MINUM</option>
          <option value="SPRAY">SPRAY</option>
          <option value="SAYAP">TUSUK SAYAP</option>
        </select>
      </div>
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="productname">PRODUK</label>
      <div class="controls"> 
        <select class="form-control" name="stockcode">
          <option value="0">Pilih Produk</option>
          <?php
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
          <option value="0">Pilih Pelaksana</option>
          <?php
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
      <button type="reset" class="btn btn-w-m btn-danger" onclick="window.history.back();"><i class="fa fa-times"></i>&nbsp;BATAL </button>
    </div>
  </div>

</form>