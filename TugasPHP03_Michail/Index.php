<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 03 - Michail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            width: 80%;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td:last-child {
            font-weight: bold;
        }

        tfoot th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tfoot th[colspan="3"] {
            text-align: right;
        }

        /* Footer */

        #copyright{
            text-align: center;
            text-decoration: none;
            font-weight: normal;
            width: 100%;
            padding: 80px 0px 50px 0px;
            margin-top: 20px;
        }

        #copyright .wrapper a {
            color: black;
            font-weight: 800;
            text-decoration: none;
        }

        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    
<?php  
$m1 = ['nim' => '0111111', 'nama' => 'Andi Santono', 'nilai' => 95];
$m2 = ['nim' => '0111112', 'nama' => 'Budi Kurniawan', 'nilai' => 80];
$m3 = ['nim' => '0111113', 'nama' => 'Candi Badur', 'nilai' => 78];
$m4 = ['nim' => '0111114', 'nama' => 'Denis Caputra', 'nilai' => 76];
$m5 = ['nim' => '0111115', 'nama' => 'Erik Manahel', 'nilai' => 86];
$m6 = ['nim' => '0111116', 'nama' => 'Fatril Nusonto', 'nilai' => 50];
$m7 = ['nim' => '0111117', 'nama' => 'Gayama Harustia', 'nilai' => 20];
$m8 = ['nim' => '0111118', 'nama' => 'Isma Lotono', 'nilai' => 30];
$m9 = ['nim' => '0111119', 'nama' => 'Jami sayir', 'nilai' => 70];
$m10 = ['nim' => '0111110', 'nama' => 'Karni Buato', 'nilai' => 65];

$ar_Judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$jumlahTransaksi = count($mahasiswa);
$jumlahnilai = array_column($mahasiswa,'nilai');
$totalNilai = array_sum($jumlahnilai);
$nilaiTertinggi = max($jumlahnilai);
$nilaiTerendah = min($jumlahnilai);
$nilaiRata = $totalNilai / $jumlahTransaksi;

$detail = [
    'Nilai Tertinggi' => $nilaiTertinggi,
    'Nilai Terendah' => $nilaiTerendah,
    'Nilai Rata-rata' => $nilaiRata,
    'Jumlah Mahasiswa' => $jumlahTransaksi,
    'Jumlah Keseluruhan Nilai' => $totalNilai
]

?>

    <h1>Daftar Nilai Mahasiswa</h1>


    <table border="1">
        <thead>
            <?php foreach ($ar_Judul as $judul) : ?>
                <th><?= $judul; ?></th>
            <?php endforeach; ?>
        </thead>

        <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <?php 
        $ket = ($mhs['nilai'] >= 60 ) ? "Lulus" : "Gagal";
        if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = "A";
        else if ($mhs['nilai'] >= 75 && $mhs['nilai'] <= 84) $grade = "B";
        else if ($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74) $grade = "C";
        else if ($mhs['nilai'] >= 30 && $mhs['nilai'] <= 59) $grade = "D";
        else if ($mhs['nilai'] >= 0 && $mhs['nilai'] <= 29) $grade = "E";
        else $grade = "";
        
        switch ($grade) {
            case "A" : $predikat = "Memuaskan"; break;
            case "B" : $predikat = "Bagus"; break;
            case "C" : $predikat = "Cukup"; break;
            case "D" : $predikat = "Kurang"; break;
            case "E" : $predikat = "Buruk"; break;
            default: $predikat = ' ';
        }
        ?>
        <tbody>
            <td><?= $no++; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['nilai']; ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tbody>
        <?php endforeach; ?>
        <tfoot>
            <?php foreach($detail as $keterangan => $hasil) : ?>
            <tr>
                <th colspan="3"><?= $keterangan ?></th>
                <th colspan="5"><?= $hasil ?></th>
            </tr>
            <?php endforeach; ?>
        </tfoot>
    </table>
    
    <footer>
        <div id="copyright">
            <div class="wrapper">
                <p>Copyright &copy; 2023, <a href="https://michailtjhang.github.io/" target="_blank">Michail</a> All Rights Reserved</p>
            </div>
        </div>
    </footer>

</body>
</html>
