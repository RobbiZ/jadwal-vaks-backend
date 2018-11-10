<div class="wrapper wrapper-content animated fadeInRight">
    <h3><b>MASUKKAN PERUBAHAN DATA USER</b></h3>                  
</div>

<?php
    $uid = $_GET["uid"];
    include "../koneksi.php";
    $sql = "select * from user where uid ='$uid'";
    $hasil = mysqli_query($kon,$sql);
    if (!$hasil ) die("Gagal query...");

    $data = mysqli_fetch_array($hasil);
    $username = $data['username'];
    $password = $data['password'];
    $role     = $data['role'];
    $token    = $data['token'];
?>

<form class="form-horizontal" action="user-simpan.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="uid" value="<?php echo $uid; ?>"/>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="username">USERNAME</label>
        <div class="controls">
            <input class="form-control" type="text" name="username" value="<?php echo $username;?>">
        </div>
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="password">PASSWORD</label>
        <div class="controls">
            <input class="form-control" type="text" name="password" value="<?php echo $password;?>">
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="role">ROLE</label>
        <div class="controls"> 
            <select class="form-control" name="role">
              <option value="admin" <?php if ($role == "admin") echo "selected"; ?> >admin</option>
              <option value="koordinator" <?php if ($role == "koordinator") echo "selected"; ?> >koordinator</option>
              <option value="vaksinator" <?php if ($role == "vaksinator") echo "selected"; ?> >vaksinator</option>
            </select>
        </div>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-12">
        <label class="control-label" for="token">TOKEN</label>
        <div class="controls">
            <input class="form-control" type="text" name="token" value="<?php echo $token;?>">
        </div>
    </div>
    </div>

    <div class="form-group"> 
    <div class="col-sm-12 col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>&nbsp;SIMPAN</button>
        <a class="btn btn-danger" href="home.php?hal=user-data"><i class="fa fa-times"></i>&nbsp;BATAL </a>
    </div>
    </div>

</form>
