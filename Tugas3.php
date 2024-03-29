<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #87CEFA;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tfoot {
            background-color: #87CEFA;
            color: black;
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>123456</td>
                <td>75</td>
                <td>Lulus</td>
                <td>B</td>
                <td>Bagus</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane</td>
                <td>234567</td>
                <td>90</td>
                <td>Lulus</td>
                <td>A</td>
                <td>Memuaskan</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Johnson</td>
                <td>345678</td>
                <td>60</td>
                <td>Lulus</td>
                <td>C</td>
                <td>Cukup</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bob</td>
                <td>456789</td>
                <td>40</td>
                <td>Tidak Lulus</td>
                <td>E</td>
                <td>Buruk</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Davis</td>
                <td>567890</td>
                <td>85</td>
                <td>Lulus</td>
                <td>A</td>
                <td>Memuaskan</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Michael</td>
                <td>678901</td>
                <td>55</td>
                <td>Lulus</td>
                <td>D</td>
                <td>Kurang</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Sarah</td>
                <td>789012</td>
                <td>70</td>
                <td>Lulus</td>
                <td>B</td>
                <td>Bagus</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Garcia</td>
                <td>890123</td>
                <td>30</td>
                <td>Tidak Lulus</td>
                <td>E</td>
                <td>Buruk</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Lisa</td>
                <td>901234</td>
                <td>75</td>
                <td>Lulus</td>
                <td>B</td>
                <td>Bagus</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Taylor</td>
                <td>012345</td>
                <td>95</td>
                <td>Lulus</td>
                <td>A</td>
                <td>Memuaskan</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">Nilai Tertinggi</td>
                <td id="nilaiTertinggi"></td>
            </tr>
            <tr>
                <td colspan="6">Nilai Terendah</td>
                <td id="nilaiTerendah"></td>
            </tr>
            <tr>
                <td colspan="6">Nilai Rata - Rata </td>
                <td id="rataRataValue"></td>
            </tr>
            <tr>
                <td colspan="6">Jumlah Mahasiswa</td>
                <td id="jumlahMahasiswa"></td>
            </tr>
            <tr>
                <td colspan="6">Jumlah Keseluruhan Nilai</td>
                <td id="jumlahKeseluruhanNilai"></td>
            </tr>
        </tfoot>
    </table>
    <script>
        // Data nilai mahasiswa
        var nilaiMahasiswa = [75, 90, 60, 40, 85, 55, 70, 30, 75, 95];

        // Fungsi untuk mencari nilai tertinggi
        var nilaiTertinggi = Math.max(...nilaiMahasiswa);
        document.getElementById("nilaiTertinggi").textContent = nilaiTertinggi;

        // Fungsi untuk mencari nilai terendah
        var nilaiTerendah = Math.min(...nilaiMahasiswa);
        document.getElementById("nilaiTerendah").textContent = nilaiTerendah;

        // Fungsi untuk menghitung nilai rata-rata
        function hitungRataRata(nilai) {
            var total = 0;
            for (var i = 0; i < nilai.length; i++) {
                total += nilai[i];
            }
            return total / nilai.length;
        } // Mengisi nilai rata-rata ke dalam tabel 
        document.getElementById("rataRataValue").innerText = hitungRataRata(nilaiMahasiswa);

        // Menampilkan jumlah mahasiswa
        document.getElementById("jumlahMahasiswa").textContent = nilaiMahasiswa.length;

        // Menghitung jumlah keseluruhan nilai
        var jumlahKeseluruhanNilai = nilaiMahasiswa.reduce((a, b) => a + b, 0);
        document.getElementById("jumlahKeseluruhanNilai").textContent = jumlahKeseluruhanNilai;
    </script>

    <footer>
        <!-- Hak Cipta/Nama -->
        <p>&copy; 2024 Data Nilai Mahasiswa. Dibuat oleh Diar Putri Yani MSIB 6</p>
    </footer>

</body>

</html>