<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        form {
            margin-bottom: 20px;
        }

        button[name="proses"],
        button[name="unproses"] {
            margin-right: 10px;
        }

        .hasil p {
            margin-bottom: 5px;
        }

        .hasil p span {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Form Belanja</h2>
        <?php
        // Set default values
        $nama = "";
        $produk = "";
        $jumlah = 0;
        $harga_satuan = 0;
        $total_belanja = 0;
        $diskon = 0;
        $ppn = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $nama = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            // Determine harga satuan based on selected product
            switch ($produk) {
                case 'TV':
                    $harga_satuan = 1250000;
                    break;
                case 'Kulkas':
                    $harga_satuan = 1500000;
                    break;
                case 'Mesin Cuci':
                    $harga_satuan = 2000000;
                    break;
                default:
                    $harga_satuan = 0;
            }
            // Hitung total belanja
            $total_belanja = $jumlah * $harga_satuan;

            // Hitung diskon
            switch (true) {
                case $total_belanja >= 1000000:
                    $diskon = 0.2 * $total_belanja;
                    break;
                default:
                    $diskon = 0;
            }

            // Hitung PPN
            $ppn = 0.1 * ($total_belanja - $diskon);

            // Hitung harga bersih
            $harga_bersih = ($total_belanja - $diskon) + $ppn;
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nama">Nama Pelanggan:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="produk">Produk Pilihan:</label>
                <select class="form-control" id="produk" name="produk" required>
                    <option value="TV" <?php if ($produk == "TV") echo "selected"; ?>>TV</option>
                    <option value="Kulkas" <?php if ($produk == "Kulkas") echo "selected"; ?>>Kulkas</option>
                    <option value="Mesin Cuci" <?php if ($produk == "Mesin Cuci") echo "selected"; ?>>Mesin Cuci</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Beli:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jumlah; ?>" required>
            </div>
            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-success" onclick="resetForm()">Batal</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <h3>Hasil</h3>
            <p>Nama: <?php echo $nama; ?></p>
            <p>Produk Pilihan: <?php echo $produk; ?></p>
            <p>Jumlah Beli: <?php echo $jumlah; ?></p>
            <p>Harga Satuan: Rp <?php echo number_format($harga_satuan, 0, ',', '.'); ?></p>
            <p>Total Belanja: Rp <?php echo number_format($total_belanja, 0, ',', '.'); ?></p>
            <p>Potongan Diskon: Rp <?php echo number_format($diskon, 0, ',', '.'); ?></p>
            <p>PPN: Rp <?php echo number_format($ppn, 0, ',', '.'); ?></p>
            <p>Harga Bersih: Rp <?php echo number_format(($total_belanja - $diskon) + $ppn, 0, ',', '.'); ?></p>
        <?php endif; ?>
    </div>
    <script>
        function resetForm() {
            document.getElementById("nama").value = "";
            document.getElementById("produk").value = "";
            document.getElementById("jumlah").value = "";
        }
    </script>
</body>

</html>