<?php
class User {

    public $name;
    public $email;
    public $card_expired = false;
    public $my_shop = [];
    public $registered = false;

    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    function printUser() {
        return "$this->name $this->email";
    }
}

?>