<?php

class User {
    public $name = "hafizur";

    public function userInfo( $name ) {
        return $this->name = $name;
    }

}

$user = new User();
echo $user->userInfo( 'Kalam' );
// echo "User name is ".$user->name;
?>