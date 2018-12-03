<div class="wrapper wrapper-content animated fadeInRight" style="zoom: 0.88;">
    <div class="row">
        <div class="col-lg-12">
        <?php 
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'tambah_sukses') {
                    echo '<script>alert("Data Vaksinasi Berhasil Ditambahkan")</script>';
                }
                else if ($_GET['status'] == 'edit_sukses') {
                    echo '<script>alert("Data Vaksinasi Berhasil Diubah")</script>';
                }
                else if ($_GET['status'] == 'hapus_sukses') {
                    echo '<script>alert("Data Vaksinasi Berhasil Dihapus")</script>';
                }
            }
        ?>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><b>Jadwal Vaksinasi</b></h2>
                    <a class="btn btn-success" href="home.php?hal=vaksinasi-tambah"><i class="fa fa-plus-square"></i>&nbsp;Baru</a>                    
                </div>
                <div class="ibox-content">                
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-examples" >
                            <thead>
                                <tr>
                                    <th>TANGGAL</th>
                                    <th>CUSTOMER</th>
                                    <th>PLASMA</th>
                                    <th>LOKASI</th>
                                    <th>JENIS</th>
                                    <th>POPULASI</th>
                                    <th>UMUR</th>
                                    <th>APLIKASI</th>
                                    <th>PRODUK</th>
                                    <th>PELAKSANA</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include '../koneksi.php';
                            $sql = "SELECT * FROM vaksinasi,user,product,plasma,customer WHERE vaksinasi.pelaksana = user.uid AND vaksinasi.stockcode=product.stockcode AND vaksinasi.plasmacode = plasma.plasmacode AND plasma.custcode = customer.custcode AND vaksinasi.reschedule IS NULL AND vaksinasi.cancel IS NULL ORDER BY tanggal DESC";
                            $query = mysqli_query($kon, $sql);
                            while ($row = mysqli_fetch_array($query)) { 
                            if (!$query)
                                die("Gagal query..".mysqli_error($kon));
                            ?>                            
                                <tr>
                                    <td><?php echo $row['tanggal'];?></td>
                                    <td><?php echo $row['custname'];?></td>
                                    <td><?php echo $row['plasmaname'];?></td>
                                    <td><?php echo $row['city'];?></td>
                                    <td><?php echo $row['jenis'];?></td>
                                    <td><?php echo $row['populasi'];?></td>
                                    <td><?php echo $row['umur'];?></td>
                                    <td><?php echo $row['aplikasi'];?></td>
                                    <td><?php echo $row['productname'];?></td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['status'];?></td>
                                    <td class="center">
                                        <center>
                                            <a class="btn btn-sm btn-primary" href="home.php?hal=vaksinasi-edit&vacid=<?php echo $row['vacid']?>" title="Edit"><i class="fa fa-edit"></i>&nbsp EDIT</a>
                                            <a class="btn btn-sm btn-danger" href="home.php?hal=vaksinasi-hapus&vacid=<?php echo $row['vacid']?>" title="Delete" onclick="return confirm('Apakah Anda Mau Menghapus Jadwal Vaksinasi Ini')"><i class="fa fa-trash"></i>&nbsp DELETE</a>
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