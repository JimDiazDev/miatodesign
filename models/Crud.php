<?php

namespace Model;

class Crud {

    // Database
    protected static $db;
    protected static $columnsDB = [];
    protected static $table = '';

    // Bugs
    protected static $bugs = [];


    // Define Conect Database
    public static function setDB($database) {
        self::$db = $database;
    }

    public function save() {
        if(!is_null( $this->id )) {
            $this->update();
        } else {
            $this->create();
        }
    }

    public function create() {

        // Sanitize Data
        $attributes = $this->sanitizeData();

        $query = " INSERT INTO " . static::$table . " ( ";
        $query .= join(', ', array_keys($attributes));
        $query .= " ) VALUES (' ";
        $query .= join("', '", array_values($attributes));
        $query .= "') ";

        $result = self::$db->query($query);

        if($result) {
            header('Location: /admin?result=1');
        }
    }

    public function update() {
        // Sanitize Data
        $attributes = $this->sanitizeData();

        $values = [];
        foreach($attributes as $key => $value) {
            $values[] = "{$key}='{$value}'";
        }

        $query = "UPDATE " . static::$table . " SET ";
        $query .= join(', ', $values );
        $query .= " WHERE id = '" . self::$db->escape_string( $this->id ) . "' ";
        $query .= " LIMIT 1 ";

        $result = self::$db->query($query);
        
        if($result) {
            header('Location: /admin?result=2');
        }
    }

    // Register Delete
    public function delete() {
        $query = "DELETE FROM " . static::$table . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $result = self::$db->query($query);

        if($result) {
            header('Location: /admin?result=3');
        }
    }

    public function data() {
        $data = [];
        foreach(static::$columnsDB as $column) {
            if($column === 'id') continue;
            $data[$column] = $this->$column;
        }
        return $data;
    }

    public function sanitizeData() {
        $data = $this->data();
        $sanitized = [];

        foreach($data as $key => $value) {
            $sanitized[$key] = self::$db->escape_string($value);
        }

        return $sanitized;
    }

    // File Upload
    public function setImage($nameImage, $image) {

        if(!is_null($this->id)) {
            $this->deleteImage($nameImage);
        }

        if($nameImage) {
            $this->$nameImage = $image;
        }
    }

    // Delete Files
    public function deleteImage($nameImage) {
        // Delete File
        $fileExists = file_exists(FOLDER_IMAGE . $this->$nameImage);
        if($fileExists) {
            unlink(FOLDER_IMAGE . $this->$nameImage);
        }
    }

    // Validation
    public static function getBugs() {
        return static::$bugs;
    }

    public function validate() {
        static::$bugs = [];
        return static::$bugs;
    }

    // List Properties
    public static function all() {
        $query = "SELECT * FROM " . static::$table;
        $result = self::consultSQL($query);
        return $result;
    }

    // Looking for a property for its id
    public static function find($id) {
        $query = "SELECT * FROM " . static::$table . " WHERE id = {$id}";

        $result = self::consultSQL($query);
        return array_shift( $result );
    }

    public static function consultSQL($query) {
        $result = self::$db->query($query);

        $array = [];
        while($register = $result->fetch_assoc()) {
            $array[] = static::createObject($register);
        }

        $result->free();

        return $array;
    }

    protected static function createObject($register) {
        $object = new static;

        foreach($register as $key => $value) {
            if(property_exists($object, $key)) {
                $object->$key = $value;
            }
        }
        return $object;
    }

    // Method to update
    public function synchronize( $args = [] ) {
        foreach($args as $key => $value) {
            if( property_exists($this, $key) && !is_null($value) ) {
                $this->$key = $value;
            }
        }
    }
}