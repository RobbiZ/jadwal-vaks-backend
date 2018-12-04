<div class="wrapper wrapper-content animated fadeInRight" style="zoom: 0.9;">
    <div class="row">
        <div class="col-lg-12">
        <?php 
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'tambah_sukses') {
                    echo '<script>alert("Data User Berhasil Ditambahkan")</script>';
                }
                else if ($_GET['status'] == 'edit_sukses') {
                    echo '<script>alert("Data User Berhasil Diubah")</script>';
                }
                else if ($_GET['status'] == 'hapus_sukses') {
                    echo '<script>alert("Data User Berhasil Dihapus")</script>';
                }
            }
        ?>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><b>Data User</b></h2>
                    <a class="btn btn-success" href="home.php?hal=user-tambah"><i class="fa fa-plus-square"></i>&nbsp;Baru</a>
                </div>
                <div class="ibox-content" style="padding: 10">                
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-examples" >
                            <thead>
                                <tr>
                                    <th>UID</th>
                                    <th>USERNAME</th>
                                    <th>PASSWORD</th>
                                    <th>ROLE</th>
                                    <th>TOKEN</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include '../koneksi.php';
                            $sql = "SELECT * FROM user ORDER BY username";
                            $query = mysqli_query($kon, $sql);
                            while ($row = mysqli_fetch_array($query)) { 
                            if (!$query)
                                die("Gagal query..".mysqli_error($kon));
                            ?>                            
                                <tr>
                                    <td><?php echo $row['uid'];?></td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['password'];?></td>
                                    <td><?php echo $row['role'];?></td>
                                    <td><?php echo $row['token'];?></td>
                                    <td class="center">
                                        <center>
                                            <a class="btn btn-sm btn-primary" href="home.php?hal=user-edit&uid=<?php echo $row['uid']?>" title="Edit"><i class="fa fa-edit"></i>&nbsp EDIT</a>
                                            <a class="btn btn-sm btn-danger" href="home.php?hal=user-hapus&uid=<?php echo $row['uid']?>" title="Delete" onclick="return confirm('Apakah Anda Mau Menghapus <?php echo $row['username']?>')"><i class="fa fa-trash"></i>&nbsp DELETE</a>
                                        </center>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>