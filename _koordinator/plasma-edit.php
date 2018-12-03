<div class="wrapper wrapper-content animated fadeInRight">
    <h3><b>MASUKKAN PERUBAHAN DATA PLASMA</b></h3>                  
</div>

<?php
    $plasmacode = $_GET["plasmacode"];
    include "../koneksi.php";
    $sql = "select * from plasma,customer where plasma.custcode = customer.custcode and plasmacode ='$plasmacode'";
    $hasil = mysqli_query($kon,$sql);
    if (!$hasil ) die("Gagal query...");

    $data = mysqli_fetch_array($hasil);
    $plasmaname  = $data['plasmaname'];
    $address     = $data['address'];
    $phone       = $data['phone'];
    $custcode    = $data['custcode'];
    $custname    = $data['custname'];
    $city        = $data['city'];
    $area        = $data['area'];
?>

<form class="form-horizontal" action="plasma-simpan.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="plasmacode" value="<?php echo $plasmacode; ?>"/>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="custname">CUST NAME</label>
        <div class="controls"> 
            <select class="form-control" name="custcode">
                <?php
                echo "<option selected value='" .$custcode."'>" . $custname." - ".$custcode. "</option>";
                include '../koneksi.php';
                $sql = "SELECT * FROM customer ORDER BY custname";
                $query = mysqli_query($kon, $sql);
                while ($row = mysqli_fetch_array($query)) {
                  echo "<option value='" .$row['custcode']."'>" .$row['custname']." - ".$row['custcode']. "</option>";
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
            <input class="form-control" type="text" name="plasmaname" value="<?php echo $plasmaname;?>">
        </div>
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="address">ADDRESS</label>
        <div class="controls">
            <input class="form-control" type="address" name="address" value="<?php echo $address;?>">
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
              <option value="DK" <?php if ($area == "DK") echo "selected"; ?> >DK</option>
              <option value="LK" <?php if ($area == "LK") echo "selected"; ?> >LK</option>
            </select>
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="phone">PHONE</label>
        <div class="controls">
            <input class="form-control" type="text" name="phone" value="<?php echo $phone;?>">
        </div>
    </div>
    </div>

    <div class="form-group"> 
    <div class="col-sm-12 col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;SIMPAN</button>
        <a class="btn btn-danger" href="home.php?hal=plasma-data"><i class="fa fa-times"></i>&nbsp;BATAL </a>
    </div>
    </div>

</form>
