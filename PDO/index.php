<html>
<head>
    <?php
    session_start();
    include 'autoinclude.php';

    ?>

<title>Strona</title>
    <link type="text/css" rel="stylesheet" href="styl.css">
</head>
<body>

<form method="post" name="formLogin">

    <h1>Nie jesteś zalogowany!</h1>


            <p>Podaj swój login:<br>   <input type="text" name="uid" required></p>
            <p>Podaj swoje hasło:<br> <input type="password" name="pass" required></p>

    <p><input type="submit" value="Zaloguj" name="loginSubmit"></p>
</form>

<form method="get" name="register">

        <p><a href="index.php?v=register">Rejestracja nowego użytkownika</a></p>

</form>



<?php
include('module/modules.php');
module_use();

if (isset($_POST["loginSubmit"])){
    $mail = $_POST['uid'];
    $pwd = $_POST['pass'];
$login = new Login();
$login->tryLogin($mail,$pwd);

}


?>

</body>
</html>
