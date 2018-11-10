<div class="wrapper wrapper-content animated fadeInRight">
  <h3><b>MASUKKAN DATA USER BARU</b></h3>
</div>

<form class="form-horizontal" action="user-simpan.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="username">USERNAME</label>
      <div class="controls"> 
      <input class="form-control" type="text" name="username" placeholder="Ketikkan Nama User Disini">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="password">PASSWORD</label>
      <div class="controls"> 
        <input class="form-control" type="text" name="password" placeholder="Ketikkan Password User Disini">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
      <label class="control-label" for="role">ROLE</label>
      <div class="controls"> 
        <select class="form-control" name="role">
          <option >Pilih Role User</option>
          <option value="admin">admin</option>
          <option value="koordinator">koordinator</option>
          <option value="vaksinator">vaksinator</option>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="token">TOKEN</label>
        <div class="controls"> 
          <input class="form-control" type="text" name="token" placeholder="Ketikkan Token User Disini">
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