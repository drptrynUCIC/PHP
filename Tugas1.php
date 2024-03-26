<?php
$nama_lengkap = "Diar Putri Yani";
$tempat_tanggal_lahir = "Cirebon, 16 April";
$pendidikan = "Mahasiswi";
$universitas = "Universitas Catur Insan Cendekia";
$program_studi = "TEKNIK INFORMATIKA - S1";
$riwayat_pendidikan = array("SDN 1 KOTA CIREBON", "SMP 1 KOTA CIREBON", "SMA 1 KOTA CIREBON");

$organisasi = array(
    array("Himpunan Mahasiswa", "Science and Education", "2022 - 2023"),
    array("Himpunan Mahasiswa", "Bendahara Umum 1", "2023 - 2024")
);

$nomor_whatsapp = "6285864843258";
$username_instagram = "drptryn";
$username_telegram = "drptryn";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles_wa.css">
</head>


<main role="main">
    <div class="container">
        <h1><?php echo $nama_lengkap; ?></h1>
        <p>Ini adalah halaman Profile Saya.</p>
    </div>
</main>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            Informasi Pribadi
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Informasi Ku</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">Nama Lengkap</div>
                        <div class="col-md-6">: <?php echo $nama_lengkap; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Tempat, Tanggal Lahir</div>
                        <div class="col-md-6">: <?php echo $tempat_tanggal_lahir; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Pendidikan</div>
                        <div class="col-md-6">: <?php echo $pendidikan; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Universitas</div>
                        <div class="col-md-6">: <?php echo $universitas; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Program Studi</div>
                        <div class="col-md-6">: <?php echo $program_studi; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Riwayat Pendidikan</div>
                        <div class="col-md-6">:</div>
                        <div class="col-md-6">
                            <ul>
                                <?php foreach ($riwayat_pendidikan as $riwayat) { ?>
                                    <li><?php echo $riwayat; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            Rengalaman Organisasi
            <div class="list-group">
                <?php foreach ($organisasi as $org) { ?>
                    <div class="list-group-item list-group-item-action">
                        <h5 class="mb-1"><?php echo $org[0]; ?></h5>
                        <p class="mb-1"><?php echo $org[1]; ?></p>
                        <small><?php echo $org[2]; ?></small>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>