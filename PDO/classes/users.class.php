<?php

class Users extends Dbh{

    protected function getUsers($mail){
        $sql = "SELECT * FROM users WHERE email LIKE ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$mail]);

        $results = $stmt->fetchAll();
        return $results;
    }

    public function setUser($username,$pwd, $email){

        $sqlCheck = "SELECT * FROM users WHERE username=?";
        $stmt = $this->connect()->prepare($sqlCheck);
        $stmt->execute([$username]);
        if ($stmt->rowCount()==0) {
            $sql = "INSERT INTO users(username,password, email) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);

            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); //Hashing Pwd
            $stmt->execute([$username, $hashedPwd, $email]);
            header('Location: index.php?v=success');
        }
        else {
            echo "<p>Użytkownik już istnieje</p>";
        }

    }


    protected function loginUser($username,$pwd)
    {


        $sql = "SELECT * FROM users WHERE username=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $passwordFetch = $stmt->fetchColumn(2);

        if (password_verify($pwd, $passwordFetch)) {
                $_SESSION['username']=$username;
                $results = $stmt->fetchAll();
            echo "<p>Pomyślnie zalogowano</p>";
                return $results;

        }
        else {
            echo "<p>Niepoprawne dane logowania</p>";
        }
    }

}

?>