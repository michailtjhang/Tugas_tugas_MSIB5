<!DOCTYPE html>
<html>
<head>
  <title>Form Data Diri</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    form {
      margin: 20px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    .radio {
      font-weight: normal;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }

    th, td {
      padding: 8px;
      border: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: white;
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
  <form method="POST" autocomplete="off">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>
    <br>
    <label for="pekerjaan">Pekerjaan:</label>
    <select id="pekerjaan" name="pekerjaan" required>
      <option value="">Pilih Pekerjaan</option>
      <option value="pekerjaan1">Pekerjaan 1</option>
      <option value="pekerjaan2">Pekerjaan 2</option>
      <option value="pekerjaan3">Pekerjaan 3</option>
      <option value="pekerjaan4">Pekerjaan 4</option>
      <option value="pekerjaan5">Pekerjaan 5</option>
      <option value="pekerjaan6">Pekerjaan 6</option>
      <option value="pekerjaan7">Pekerjaan 7</option>
      <option value="pekerjaan8">Pekerjaan 8</option>
      <option value="pekerjaan9">Pekerjaan 9</option>
      <option value="pekerjaan10">Pekerjaan 10</option>
    </select>
    <br>
    <label for="hobby">Hobby:</label><br>
    <input type="radio" id="hobby1" name="hobby" value="hobby1" required>
    <label for="hobby1" class="radio">Hobby 1</label><br>
    <input type="radio" id="hobby2" name="hobby" value="hobby2">
    <label for="hobby2" class="radio">Hobby 2</label><br>
    <input type="radio" id="hobby3" name="hobby" value="hobby3">
    <label for="hobby3" class="radio">Hobby 3</label><br>
    <input type="radio" id="hobby4" name="hobby" value="hobby4">
    <label for="hobby4" class="radio">Hobby 4</label><br>
    <input type="radio" id="hobby5" name="hobby" value="hobby5">
    <label for="hobby5" class="radio">Hobby 5</label><br>
    <input type="radio" id="hobby6" name="hobby" value="hobby6">
    <label for="hobby6" class="radio">Hobby 6</label><br>
    <input type="radio" id="hobby7" name="hobby" value="hobby7">
    <label for="hobby7" class="radio">Hobby 7</label><br>
    <input type="radio" id="hobby8" name="hobby" value="hobby8">
    <label for="hobby8" class="radio">Hobby 8</label><br>
    <input type="radio" id="hobby9" name="hobby" value="hobby9">
    <label for="hobby9" class="radio">Hobby 9</label><br>
    <input type="radio" id="hobby10" name="hobby" value="hobby10">
    <label for="hobby10" class="radio">Hobby 10</label><br>
    <br>
    <input type="submit" name="simpan" value="Simpan">
  </form>

  <?php
    if(isset($_POST['simpan'])) :
      $nama = $_POST['nama'];
      $pekerjaan = $_POST['pekerjaan'];
      $hobby = $_POST['hobby'];
  ?>
      <h2>Data Diri</h2>
      <table>
        <tr>
          <th>Nama</th>
          <th>Pekerjaan</th>
          <th>Hobby</th>
        </tr>
        <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo $pekerjaan; ?></td>
          <td><?php echo $hobby; ?></td>
        </tr>
      </table>
  <?php endif; ?>

  <div id="copyright">
    <div class="wrapper">
      <p>Copyright &copy; 2023, <a href="https://michailtjhang.github.io/" target="_blank">Michail</a> All Rights Reserved</p>
    </div>
  </div>

</body>
</html>