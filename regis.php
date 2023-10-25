<?php
session_start();

if (isset($_POST["regis"])){
    if(isset($_POST["username"]) && isset($_POST["password"])  ){
        $_SESSION['username'] = $_POST["username"];
        $_SESSION['password'] = $_POST["password"];
        $_SESSION['nohp'] = $_POST["nohp"];

    ?>
        <script type="text/javascript">
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
    <title>Register</title>
    <link rel="stylesheet" href="style/styleLogin.css">
</head>
<body>
    <div class="kotak_login">
        <h1>Registrasi</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="txt_field">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="txt_field">
                <input type="number" name="nohp" placeholder="Nomor Hp" required>
            </div>
            <div class="button2">
                <input type="submit" value="Register" name="regis">
                <div class="regis_link">
                    Sudah Punya Akun? <a href="login.php">Login</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>