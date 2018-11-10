<div class="wrapper wrapper-content animated fadeInRight">
  <h3><b>MASUKKAN DATA PRODUCT BARU</b></h3>
</div>

<form class="form-horizontal" action="product-simpan.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="stockcode">STOCKCODE</label>
      <div class="controls"> 
      <input class="form-control" type="text" name="stockcode" placeholder="Ketikkan Kode Product Disini">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="productname">PRODUCT NAME</label>
      <div class="controls"> 
        <input class="form-control" type="text" name="productname" placeholder="Ketikkan Nama Product Disini">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="productline">PRODUCT LINE</label>
      <div class="controls"> 
        <select class="form-control" name="productline">
          <option >Pilih Lini Product</option>
          <option value="BP">BP</option>
          <option value="PP">PP</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="package">PACKAGE</label>
      <div class="controls"> 
        <input class="form-control" type="text" name="package" placeholder="Ketikkan Kemasan Product Disini">
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