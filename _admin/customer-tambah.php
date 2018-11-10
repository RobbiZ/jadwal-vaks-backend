<div class="wrapper wrapper-content animated fadeInRight">
  <h3><b>MASUKKAN DATA CUSTOMER BARU</b></h3>
</div>

<form class="form-horizontal" action="customer-simpan.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="custcode">CUST CODE</label>
      <div class="controls"> 
      <input class="form-control" type="text" name="custcode" placeholder="Ketikkan Kode Customer Disini">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="custname">CUST NAME</label>
      <div class="controls"> 
        <input class="form-control" type="text" name="custname" placeholder="Ketikkan Nama Customer Disini">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="category">CATEGORY</label>
      <div class="controls"> 
        <select class="form-control" name="category">
          <option >Pilih Kategori Customer</option>
          <option value="PS">PS</option>
          <option value="Farm">Farm</option>
          <option value="KK">KK</option>
          <option value="KL">KL</option>
          <option value="KN">KN</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="salesman">SALESMAN</label>
        <div class="controls"> 
          <input class="form-control" type="text" name="salesman" placeholder="Ketikkan Kode Salesman yang menangani Customer Disini">
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