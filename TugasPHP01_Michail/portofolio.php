<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio - Michail</title>
  <!-- Link ke file CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Link ke file CSS tambahan -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.html">Michail</a>
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

  <!-- Konten halaman Portofolio -->
  <section class="container">
        <h1>My Portofolio</h1>
        <p>Berikut ini adalah proyek dan pengalaman saya di masa lalu:</p>
        <div class="row">
            <div class="col">
                <h3>Pengalaman</h3>
                <p><b>Frontend & Backend Development</b></p>
                <ul>
                  <li>HTML - Experienced</li>
                  <li>CSS - Experienced</li>
                  <li>GIT - Intermediate</li>
                  <li>JavaScript - Basic</li>
                  <li>UI & UX - Intermediate</li>
                </ul>
                <p><b>Language Programming</b></p>
                <ul>
                  <li>C++ - Intermediate</li>
                  <li>Java - Intermediate</li>
                  <li>Pyton - Basic</li>
                </ul>
            </div>
            
            <div class="col">
              <h3>Proyek</h3>
              <div id="col-ul">
                <picture>
                      <source srcset="https://michailtjhang.github.io/assets/Bird%20Shooting%20Game.png" type="image/svg+xml">
                      <img src="https://michailtjhang.github.io/assets/Bird%20Shooting%20Game.png" class="img-fluid img-thumbnail" alt="...">
                    </picture>
                    <h3>Bird Shooting Game</h3>
                    <p>Bird Shooting Game adalah permainan menembak burung yang muncul secara acak di layar. Kamu punya 5 kesempatan untuk menembak burung sebelum permainan berakhir. Setelah selesai, kamu akan melihat waktu total yang kamu butuhkan untuk menyelesaikan permainan. Coba mainkan dan pecahkan rekor waktu terbaik! 💥🐦</p>
                    <div class="twobutton">
                      <a class="btn btn-primary" href="https://github.com/michailtjhang/Bird-Shooting-Game" target="_blank" role="button" >Github</a>
                      <a class="btn btn-primary" href="https://michailtjhang.github.io/Bird-Shooting-Game/" target="_blank" role="button" >Preview</a>
                    </div>
              </div>
            </div>
        </div>
    </section>

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