<div class="wrapper wrapper-content animated fadeInRight">
  <h3><b>MASUKKAN DATA PLASMA BARU</b></h3>
</div>

<form class="form-horizontal" action="plasma-simpan.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="custname">CUST NAME</label>
      <div class="controls"> 
        <select class="form-control" name="custcode">
          <option >Pilih Plasma ini Ikut Customer Mana</option>
          <?php
          include '../koneksi.php';
          $sql = "SELECT * FROM customer ORDER BY custname";
          $query = mysqli_query($kon, $sql);
          while ($row = mysqli_fetch_array($query)) {
            echo "<option value='" . $row['custcode'] ."'>" . $row['custname']." - ".$row['custcode']. "</option>";
          }
          ?>
        </select>
      </div>
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="plasmaname">PLASMA NAME</label>
      <div class="controls"> 
        <input class="form-control" type="text" name="plasmaname" placeholder="Ketikkan Nama Plasma Disini">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="address">ADDRESS</label>
        <div class="controls"> 
          <input class="form-control" type="text" name="address" placeholder="Ketikkan Alamat Plasma Disini">
        </div>
    </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="city">CITY</label>
        <div class="controls">
            <input class="form-control" type="city" name="city" value="<?php echo $city;?>">
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="area">AREA</label>
        <div class="controls"> 
            <select class="form-control" name="area">
              <option value="DK">DK</option>
              <option value="LK">LK</option>
            </select>
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="phone">PHONE</label>
        <div class="controls"> 
          <input class="form-control" type="text" name="phone" placeholder="Ketikkan Nomor Telepon Plasma Disini">
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