<?php 
// dekalasi variabel dan tipe data
$nama = "Michail";
$email = "michailaja@gmail.com";
$no_telp = 81314092890;
$sosialMedia = "@michailtj39";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Michail</title>
  <!-- Link ke file CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Link ke file CSS tambahan -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.html"><?= $nama ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portofolio.php">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Konten halaman Contact -->
  <div class="container mt-5">
    <h1>Contact Me</h1>
    <p>Jangan ragu untuk menghubungi saya menggunakan informasi kontak di bawah ini:</p>
    <div id="ul-style">
      <ul>
        <li>Email: <?= $email ?></li>
        <li>Phone: <?= "(+62) 0", $no_telp?></li>
        <li>Social Media: <?= $sosialMedia ?></li>
      </ul>
    </div>
  </div>

  <div id="copyright">
      <div class="wrapper">
          <p>Copyright &copy; 2023, <a href="https://michailtjhang.github.io/" target="_blank">Michail</a> All Rights Reserved</p>
      </div>
  </div>

  <!-- Link ke file JavaScript Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>