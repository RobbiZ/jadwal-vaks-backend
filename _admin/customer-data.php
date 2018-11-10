<div class="wrapper wrapper-content animated fadeInRight" style="zoom: 0.9;">
    <div class="row">
        <div class="col-lg-12">
        <?php 
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'tambah_sukses') {
                    echo '<script>alert("Data Customer Berhasil Ditambahkan")</script>';
                }
                else if ($_GET['status'] == 'edit_sukses') {
                    echo '<script>alert("Data Customer Berhasil Diubah")</script>';
                }
                else if ($_GET['status'] == 'hapus_sukses') {
                    echo '<script>alert("Data Customer Berhasil Dihapus")</script>';
                }
            }
        ?>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><b>Data Customer</b></h2>
                    <a class="btn btn-success" href="home.php?hal=customer-tambah"><i class="fa fa-plus-square"></i>&nbsp;Baru</a>                    
                </div>
                <div class="ibox-content">                
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-examples" >
                            <thead>
                                <tr>
                                    <th>CUST CODE</th>
                                    <th>CUST NAME</th>
                                    <th>CATEGORY</th>
                                    <th>SALESMAN</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include '../koneksi.php';
                            $sql = "SELECT * FROM customer ORDER BY custname";
                            $query = mysqli_query($kon, $sql);
                            while ($row = mysqli_fetch_array($query)) { 
                            if (!$query)
                                die("Gagal query..".mysqli_error($kon));
                            ?>                            
                                <tr>
                                    <td><?php echo $row['custcode'];?></td>
                                    <td><?php echo $row['custname'];?></td>
                                    <td><?php echo $row['category'];?></td>
                                    <td><?php echo $row['salesman'];?></td>
                                    <td class="center">
                                        <center>
                                            <a class="btn btn-sm btn-primary" href="home.php?hal=customer-edit&custcode=<?php echo $row['custcode']?>" title="Edit"><i class="fa fa-edit"></i>&nbsp EDIT</a>
                                            <a class="btn btn-sm btn-danger" href="home.php?hal=customer-hapus&custcode=<?php echo $row['custcode']?>" title="Delete" onclick="return confirm('Apakah Anda Mau Menghapus <?php echo $row['custname']?>')"><i class="fa fa-trash"></i>&nbsp DELETE</a>
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