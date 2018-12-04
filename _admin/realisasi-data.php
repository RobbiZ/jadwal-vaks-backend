<div class="wrapper wrapper-content animated fadeInRight" style="zoom: 0.8; padding: 10">
    <div class="row">
        <div class="col-lg-12">
        <?php 
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'realisasi_sukses') {
                    echo '<script>alert("Data Realisasi Vaksinasi Berhasil Disimpan")</script>';
                }
                else if ($_GET['status'] == 'reschedule_sukses') {
                    echo '<script>alert("Vaksinasi Berhasil Dijadwalkan Ulang")</script>';
                }
                else if ($_GET['status'] == 'cancel_sukses') {
                    echo '<script>alert("Jadwal Vaksinasi Berhasil Dibatalkan")</script>';
                }
            }
        ?>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><b>Realisasi Vaksinasi</b></h2>
                </div>
                <div class="ibox-content" style="padding: 10">                
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-examples" >
                            <thead>
                                <tr>
                                    <th>TANGGAL</th>
                                    <th>CUSTOMER</th>
                                    <th>PLASMA</th>
                                    <th>POPULASI</th>
                                    <th>PELAKSANA</th>
                                    <th>DO NUMBER</th>
                                    <th>KM AWAL</th>
                                    <th>KM AKHIR</th>
                                    <th>RESCHEDULE</th>
                                    <th>TANGGAL BARU</th>
                                    <th>CANCEL</th>
                                    <th>REMARK</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include '../koneksi.php';
                            $sql = "SELECT * FROM vaksinasi,user,product,plasma,customer WHERE vaksinasi.pelaksana = user.uid AND vaksinasi.stockcode=product.stockcode AND vaksinasi.plasmacode = plasma.plasmacode AND plasma.custcode = customer.custcode ORDER BY tanggal DESC, vacid DESC";
                            $query = mysqli_query($kon, $sql);
                            while ($row = mysqli_fetch_array($query)) { 
                            if (!$query)
                                die("Gagal query..".mysqli_error($kon));
                            ?>                            
                                <tr>
                                    <td><?php echo $row['tanggal'];?></td>
                                    <td><?php echo $row['custname'];?></td>
                                    <td><?php echo $row['plasmaname'];?></td>
                                    <td><?php echo $row['populasi'];?></td>
                                    <td><?php echo $row['username'];?></td>                                    
                                    <td><?php echo $row['donumber'];?></td>
                                    <td><?php echo $row['kmstart'];?></td>
                                    <td><?php echo $row['kmfinish'];?></td>
                                    <?php
                                    if ($row['reschedule']=='A'){$showReschedule='Ayam dalam pengobatan';}
                                    else if ($row['reschedule']=='B'){$showReschedule='Ayam terlalu kecil';}
                                    else if ($row['reschedule']=='C'){$showReschedule='Chick in mundur';}
                                    else if ($row['reschedule']=='D'){$showReschedule='Jadwal padat';}
                                    else if ($row['reschedule']=='E'){$showReschedule='Kurang vaksinator';}
                                    else if ($row['reschedule']=='F'){$showReschedule='Mendahulukan kasus';}
                                    else if ($row['reschedule']=='G'){$showReschedule='Permintaan peternak';}
                                    else if ($row['reschedule']=='H'){$showReschedule='Lain-lain';}
                                    else{$showReschedule='';}
                                    ?>
                                    <td><?php echo $showReschedule;?></td>
                                    <td><?php echo $row['newdate'];?></td>
                                    <?php
                                    if ($row['cancel']=='1'){$showCancel='Dikerjakan orang lain';}
                                    else if ($row['cancel']=='2'){$showCancel='Sudah dipanen';}
                                    else if ($row['cancel']=='3'){$showCancel='Vaksin hatchery';}
                                    else if ($row['cancel']=='4'){$showCancel='Lain-lain';}
                                    else{$showCancel='';}
                                    ?>
                                    <td><?php echo $showCancel;?></td>
                                    <td><?php echo $row['remark'];?></td>
                                    <td class="center">
                                        <center>
                                            <a class="btn btn-sm btn-success" href="home.php?hal=realisasi-edit&vacid=<?php echo $row['vacid']?>" title="Edit"><i class="fa fa-edit"></i>&nbsp REALISASI</a>
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