<?php

class UsersContr extends Users{

    public function createUser($username,$pwd, $email){


        $this->setUser($username,$pwd,$email);

    }

}

?>