<div class="wrapper wrapper-content animated fadeInRight">
    <h3><b>MASUKKAN PERUBAHAN DATA PRODUCT</b></h3>
</div>

<?php
    $stockcode = $_GET["stockcode"];
    include "../koneksi.php";
    $sql = "select * from product where stockcode ='$stockcode'";
    $hasil = mysqli_query($kon,$sql);
    if (!$hasil ) die("Gagal query...");

    $data = mysqli_fetch_array($hasil);
    $stockcode    = $data['stockcode'];
    $productname  = $data['productname'];
    $productline  = $data['productline'];
    $package      = $data['package'];
?>

<form class="form-horizontal" action="product-simpan.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="stockcode_old" value="<?php echo $stockcode; ?>"/>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="stockcode">STOCKCODE</label>
        <div class="controls">
            <input class="form-control" type="text" name="stockcode" value="<?php echo $stockcode; ?>">
        </div>
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="productname">PRODUCT NAME</label>
        <div class="controls">
            <input class="form-control" type="text" name="productname" value="<?php echo $productname;?>">
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="productline">PRODUCT LINE</label>
        <div class="controls"> 
            <select class="form-control" name="productline">
              <option value="BP" <?php if ($productline == "BP") echo "selected"; ?> >BP</option>
              <option value="PP" <?php if ($productline == "PP") echo "selected"; ?> >PP</option>
            </select>
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="package">PACKAGE</label>
        <div class="controls">
            <input class="form-control" type="text" name="package" value="<?php echo $package;?>">
        </div>
    </div>
    </div>       

    <div class="form-group"> 
    <div class="col-sm-12 col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;SIMPAN</button>
        <a class="btn btn-danger" href="home.php?hal=product-data"><i class="fa fa-times"></i>&nbsp;BATAL </a>
    </div>
    </div>

</form>
