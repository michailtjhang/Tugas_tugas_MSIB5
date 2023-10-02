<?php  

require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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

	<h1>Tugas 06 - Michail</h1>


<?php  

$lingkaran = new Lingkaran(5);
$persegiPanjang = new PersegiPanjang(4, 6);
$segitiga = new Segitiga(3, 4);

$JudurArr = ['No.', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
$bidangArr = [$lingkaran, $persegiPanjang, $segitiga];

?>

	<!-- cetak dalam bentuk table -->
	<table border="1">
		<thead>
			<tr>
				<!-- <?php foreach ($JudurArr as $judul) : ?> -->
				<th><?= $judul ?></th>
				<!-- <?php endforeach; ?> -->
			</tr>
		</thead>
		<tbody>
			<?php foreach ($bidangArr as $index => $bidang) : ?>
			<tr>
				<td><?= ($index + 1); ?></td>
				<td><?= $bidang->namaBidang() ?></td>
				<td> - </td>
				<td><?= $bidang->kelilingBidang() ?></td>
				<td><?= $bidang->luasBidang() ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
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