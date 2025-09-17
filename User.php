<?php

class User {
    private int $id;
    private string $name;
    private string $email;
    private string $password;

    public function __construct($id, $name, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function isValidPassword() {
        
    }

    public function setHashedPassword() {

    }

    public function getUserData() {
        return "ID " . $this->id . "\n" . "Name " . $this->name . "\n" . "Email " . $this->email . "\n" . "Password " . $this->password . "\n";
    }
}

$vanessa = new User(1, "Vanessa", "vanesa123@gmail.com", "julieteamo");

echo $vanessa->getUserData();
?>