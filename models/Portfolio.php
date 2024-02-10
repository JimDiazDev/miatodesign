<?php

namespace Model;

class Portfolio extends Crud {

    protected static $table = 'portfolio';
    protected static $columnsDB = ['id', 'title', 'titulo', 'description', 'descripcion', 'imgOne', 'imgTwo'];

    public $id;
    public $title;
    public $titulo;
    public $description;
    public $descripcion;
    public $imgOne;
    public $imgTwo;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? NULL;
        $this->title = $args['title'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imgOne = $args['imgOne'] ?? '';
        $this->imgTwo = $args['imgTwo'] ?? '';
    }

    public function validate() {
        if(!$this->title) {
            self::$bugs[] = "The title is mandatory";
        }

        if(!$this->titulo) {
            self::$bugs[] = "El titulo es obligatorio";
        }

        if(!$this->description) {
            self::$bugs[] = "The description is mandatory";
        }

        if(!$this->descripcion) {
            self::$bugs[] = "La descripcion es obligatoria";
        }

        return self::$bugs;

    }
}