<?php

namespace Model;

class Contact extends Crud {

    protected static $table = 'contact';
    protected static $columnsDB = ['id', 'email', 'phone', 'interOne', 'interTwo', 'interThree', 'interFour', 'interFive'];

    
    public $id;
    public $email;
    public $phone;
    public $interOne;
    public $interTwo;
    public $interThree;
    public $interFour;
    public $interFive;

    public function __construct($args = []) {

        $this->id = $args['id'] ?? NULL;
        $this->email = $args['email'] ?? '';
        $this->phone = $args['phone'] ?? '';
        $this->interOne = $args['interOne'] ?? '';
        $this->interTwo = $args['interTwo'] ?? '';
        $this->interThree = $args['interThree'] ?? '';
        $this->interFour = $args['interFour'] ?? '';
        $this->interFive = $args['interFive'] ?? '';

    }

    public function validate() {
        if(!$this->email) {
            self::$bugs[] = "The email is mandatory";
        }

        if(!$this->phone) {
            self::$bugs[] = "The phone is mandatory";
        }

        if(!$this->interOne) {
            self::$bugs[] = "At least one interest must be shown";
        }

        return self::$bugs;

    }
}
