<?php

class Login extends Users {


    public function tryLogin($mail, $pwd){
        $this->loginUser($mail, $pwd);
}


}




?>