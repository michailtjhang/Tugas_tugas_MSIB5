<?php  

require 'Suhu.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu (OOp) - Michail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
        }

        h1 {
            color: #ff0000;
            font-size: 28px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
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
    <h1>Tugas 05 - Michail</h1>

    <?php  
    
    $dataKonversiSuhu1 = new Suhu('Celcius', 25, 'Fahrenheit');
    $dataKonversiSuhu2 = new Suhu('Fahrenheit', 100, 'Celcius');
    $dataKonversiSuhu3 = new Suhu('Celcius', 30, 'Rheamur');
    $dataKonversiSuhu4 = new Suhu('Rheamur', 50, 'Celcius');

    $dataKonversiSuhu1->cetak();
    $dataKonversiSuhu2->cetak();
    $dataKonversiSuhu3->cetak();
    $dataKonversiSuhu4->cetak();
    
    ?>

    <footer>
        <div id="copyright">
            <div class="wrapper">
                <p>Copyright &copy; 2023, <a href="https://michailtjhang.github.io/" target="_blank">Michail</a> All Rights Reserved</p>
            </div>
        </div>
    </footer>

</body>
</html>