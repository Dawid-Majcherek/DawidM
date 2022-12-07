<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input placeholder="login" type="text" name="login">
        <input placeholder="password" type="password" name="password">
        <input type="submit" value="Zaloguj"><input type="submit">
    </form>
    <?php
    if(isset($_POST['login']) && isset($_POST['password'])){
        echo "Login POST: ". $_POST['login']. "<br>";
        $login = $_POST['login'];
        $password = $_POST['password'];
        echo "Password POST: ". $_POST['password']. "<br>";
        $du = mysqli_connect("127.0.0.1","root","","users");
        $wynik = mysqli_query($du
           "SELECT login, password FROM us WHERE login = $login"
    );
    $rekord = mysqli_feth_assoc($wynik);
    if(($_POST["login"] == $rekord["login"]) &&
    ($_POST['password']== $rekord['password'])){
        echo "Zalogowałeś się Brawo!!! :P<br>";
        echo "Login MYsQl: ". $rekord['login']."<br>";
    }else{
        echo 'Nie masz konta, możesz je założyć tutaj <a href="register.php">Zarejestruj</a>';

    }
    }
    ?>
</body>
</html>