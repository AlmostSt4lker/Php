<html>

<form method="post" name="formLogin">

    <h1>Zarejestruj się: </h1>


    <p>Nazwa nowego użytkownika:<br>   <input type="text" name="username" required></p>
    <p>Hasło nowego użytkownika:<br> <input type="password" name="pwd" required></p>
    <p>Powtórz hasło:<br> <input type="password" name="pwdRepeat" required></p>
    <p>Adres email:<br> <input type="email" name="mail" required></p>

    <p><input type="submit" value="Rejestracja" name="registerSubmit"></p>

</form>



<?php
error_reporting(E_ALL & ~E_NOTICE);

if (isset($_POST["registerSubmit"]) && $_POST['pwdRepeat'] == $_POST['pwd']) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['mail'];


    $userObj = new UsersContr();
    $userObj->setUser($username,$pwd, $email);


}
else if(isset($_POST["registerSubmit"])) {
    echo "<br><p>Niepoprawne dane ! </p>";
}


?>


</html>