<?php
include "../koneksi.php";
?>

<div class="wrapper wrapper-content animated fadeInRight" style="zoom: 1.2; padding: 10">
    <div class="row">
        <a href="home.php?hal=vaksinasi-data" class="col-lg-12">
            <div class="widget style1 blue-bg">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-eyedropper fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Jadwal Vaksinasi Belum Dikerjakan</span>
                        <h2 class="font-bold">
                            <?php
                            $sql = "SELECT * FROM vaksinasi WHERE cancel IS NULL AND reschedule IS NULL AND status = 'BELUM'";
                            $query = mysqli_query($kon, $sql);
                            $hasil = mysqli_num_rows($query);
                            echo $hasil;
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </a>
        <a href="home.php?hal=realisasi-data" class="col-lg-12 animated fadeInRight">
            <div class="widget style1 white-bg">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-check fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Jadwal Vaksinasi Sudah Realisasi</span>
                        <h2 class="font-bold">
                            <?php
                            $sql = "SELECT * FROM vaksinasi WHERE status = 'SUDAH'";
                            $query = mysqli_query($kon, $sql);
                            $hasil = mysqli_num_rows($query);
                            echo $hasil;
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </a>
        <a href="home.php?hal=plasma-data" class="col-lg-12 animated fadeInRight">
            <div class="widget style1 yellow-bg">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-cogs fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Data Plasma </span>
                        <h2 class="font-bold">
                            <?php
                            $sql = "SELECT * FROM plasma";
                            $query = mysqli_query($kon, $sql);
                            $hasil = mysqli_num_rows($query);
                            echo $hasil;
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>