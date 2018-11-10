<div class="wrapper wrapper-content animated fadeInRight">
    <h3><b>MASUKKAN PERUBAHAN DATA CUSTOMER</b></h3>                  
</div>

<?php
    $custcode = $_GET["custcode"];
    include "../koneksi.php";
    $sql = "select * from customer where custcode ='$custcode'";
    $hasil = mysqli_query($kon,$sql);
    if (!$hasil ) die("Gagal query...");

    $data = mysqli_fetch_array($hasil);
    $custcode     = $data['custcode'];
    $custname     = $data['custname'];
    $category     = $data['category'];
    $salesman     = $data['salesman'];
?>

<form class="form-horizontal" action="customer-simpan.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="custcode_old" value="<?php echo $custcode; ?>"/>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="custcode">CUST CODE</label>
        <div class="controls">
            <input class="form-control" type="text" name="custcode" value="<?php echo $custcode; ?>">
        </div>
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="custname">CUST NAME</label>
        <div class="controls">
            <input class="form-control" type="text" name="custname" value="<?php echo $custname;?>">
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="category">CATEGORY</label>
        <div class="controls"> 
            <select class="form-control" name="category">
              <option value="PS" <?php if ($category == "PS") echo "selected"; ?> >PS</option>
              <option value="Farm" <?php if ($category == "Farm") echo "selected"; ?> >Farm</option>
              <option value="KK" <?php if ($category == "KK") echo "selected"; ?> >KK</option>
              <option value="KL" <?php if ($category == "KL") echo "selected"; ?> >KL</option>
              <option value="KN" <?php if ($category == "KN") echo "selected"; ?> >KN</option>
            </select>
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="salesman">SALESMAN</label>
        <div class="controls">
            <input class="form-control" type="text" name="salesman" value="<?php echo $salesman;?>">
        </div>
    </div>
    </div>  

    <div class="form-group"> 
    <div class="col-sm-12 col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;SIMPAN</button>
        <a class="btn btn-danger" href="home.php?hal=customer-data"><i class="fa fa-times"></i>&nbsp;BATAL </a>
    </div>
    </div>

</form>
