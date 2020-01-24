<?php

class UsersView extends Users{

    public function showUser($name){
        $results = $this->getUsers($name);
    echo "Full name: ".$results[0]['email'];
    }

}

?>
