<?php

namespace Model;

class Admin extends Crud {

    protected static $table = 'user';
    protected static $columnsDB = ['id', 'email', 'password'];

    public $id;
    public $email;
    public $password;

    public function __construct($args = []) {

        $this->id = $args['id'] ?? NULL;
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';

    }

    public function validate() {
        if(!$this->email) {
            self::$bugs[] = "The email is mandatory";
        }

        if(!$this->password) {
            self::$bugs[] = "The password is mandatory";
        }

        return self::$bugs;

    }

    public function userExists() {
        $query = "SELECT * FROM " . self::$table . " WHERE email = '" . $this->email . "' LIMIT 1";

        $result = self::$db->query($query);

        if(!$result->num_rows) {
            self::$bugs[] = 'the mail is incorrect';
            return;
        }
        return $result;
    }

    public function checkPassword($result) {
        $user = $result->fetch_object();
        
        $authenticated = password_verify($this->password, $user->password);

        if(!$authenticated) {
            self::$bugs[] = 'the password is incorrect';
        }
        return $authenticated;
    }

    public function authentify() {
        session_start();

        $_SESSION['user'] = $this->email;
        $_SESSION['login'] = true;

        header('Location: /admin');
    }

}