<?php
session_start();

if (isset($_POST["login"])){
    if(isset($_POST["usernamebaru"]) && isset($_POST["passwordbaru"])  ){
        $_SESSION['usernamebaru'] = $_POST["usernamebaru"];
        $_SESSION['passwordbaru'] = $_POST["passwordbaru"];
    }
    
    if($_SESSION['usernamebaru'] == $_SESSION['username'] && $_SESSION['passwordbaru'] == $_SESSION['password']) {?>
        <script type="text/javascript">
            window.alert("Berhasil Login");
            window.location.assign("index.php");
        </script>
    <?php 
    }
    
    else if($_SESSION['usernamebaru'] == "admin" && $_SESSION['passwordbaru'] == "123"){ ?>
        <script type="text/javascript">
            window.alert("Berhasil Login");
            window.location.assign("data.php");
        </script>
    <?php
    }
    
    else{?>
        <script type="text/javascript">
            window.alert("Gagal Login");
            window.location.assign("login.php");
        </script>
    <?php 
    } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/stylelogin.css">
</head>
<body>
    <div class="kotak_login">
        <h1>Login</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="usernamebaru" placeholder="usernamebaru" required>
            </div>
            <div class="txt_field">
                <input type="password" name="passwordbaru" placeholder="passwordbaru" required>
            </div>
            <div class="button">
                <input type="submit" value="Login" name="login">
                <div class="regis_link">
                    Tidak Punya Akun? <a href="regis.php">Register</a><br>
                    <a href="index.php">Halaman Utama</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>