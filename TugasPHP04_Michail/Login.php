<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            margin-left: 80px;
            color: #333;
        }

        .error-message {
            color: red;
            font-style: italic;
            margin-bottom: 10px;
            text-align: center;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
        }

        form {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
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
    
    <h1>Login Admin !!</h1>

<?php  
if ( isset($_POST['submit']) ) {

    $username = $_POST['username'];
    $password = $_POST['pass'];
    
	// cek username & password
    function cekLogin ($user, $pass ) {
        if ( $user == 'admin' && $pass == 'mimin') {
            // jika benar, pindah ke halaman admin
            header("Location: admin.php");
            exit();
        } else if ( $user == 'admin' && $pass == 'admin123') {
            header("Location: admin.php");
            exit();
        } else if ( $user == 'admin123' && $pass == 'admin123') {
            header("Location: admin.php");
            exit();
        } else {
            // jika salah, tampilkan pesan kesalahan
            echo '<span class="error-message">Username atau password salah!</span>';
        }
    }

    cekLogin($username, $password);
}
?>

    <form action="" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username"> <br>
        <label for="pass">Password :</label>
        <input type="password" name="pass" id="pass"> <br>
        <button type="submit" name="submit">Login</button>
	</form>

    <foo>
        <div id="copyright">
            <div class="wrapper">
                <p>Copyright &copy; 2023, <a href="https://michailtjhang.github.io/" target="_blank">Michail</a> All Rights Reserved</p>
            </div>
        </div>
    </foo
</body>
</html>