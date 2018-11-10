<div class="wrapper wrapper-content animated fadeInRight" style="zoom: 0.9;">
    <div class="row">
        <div class="col-lg-12">
        <?php 
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'tambah_sukses') {
                    echo '<script>alert("Data Plasma Berhasil Ditambahkan")</script>';
                }
                else if ($_GET['status'] == 'edit_sukses') {
                    echo '<script>alert("Data Plasma Berhasil Diubah")</script>';
                }
                else if ($_GET['status'] == 'hapus_sukses') {
                    echo '<script>alert("Data Plasma Berhasil Dihapus")</script>';
                }
            }
        ?>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><b>Data Plasma</b></h2>
                    <a class="btn btn-success" href="home.php?hal=plasma-tambah"><i class="fa fa-plus-square"></i>&nbsp;Baru</a>                    
                </div>
                <div class="ibox-content">                
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-examples" >
                            <thead>
                                <tr>
                                    <th>PLASMA CODE</th>
                                    <th>PLASMA NAME</th>
                                    <th>CUST NAME</th>
                                    <th>ADDRESS</th>
                                    <th>CITY</th>
                                    <th>AREA</th>
                                    <th>PHONE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include '../koneksi.php';
                            $sql = "SELECT * FROM plasma,customer WHERE plasma.custcode = customer.custcode ORDER BY plasmaname";
                            $query = mysqli_query($kon, $sql);
                            while ($row = mysqli_fetch_array($query)) { 
                            if (!$query)
                                die("Gagal query..".mysqli_error($kon));
                            ?>                            
                                <tr>
                                    <td><?php echo $row['plasmacode'];?></td>
                                    <td><?php echo $row['plasmaname'];?></td>
                                    <td><?php echo $row['custname'];?></td>
                                    <td><?php echo $row['address'];?></td>
                                    <td><?php echo $row['city'];?></td>
                                    <td><?php echo $row['area'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td class="center">
                                        <center>
                                            <a class="btn btn-sm btn-primary" href="home.php?hal=plasma-edit&plasmacode=<?php echo $row['plasmacode']?>" title="Edit"><i class="fa fa-edit"></i>&nbsp EDIT</a>
                                            <a class="btn btn-sm btn-danger" href="home.php?hal=plasma-hapus&plasmacode=<?php echo $row['plasmacode']?>" title="Delete" onclick="return confirm('Apakah Anda Mau Menghapus <?php echo $row['plasmaname']?>')"><i class="fa fa-trash"></i>&nbsp DELETE</a>
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