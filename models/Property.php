<?php

namespace Model;

class Property extends Crud {
    
    protected static $table = 'projects';
    protected static $columnsDB = ['id', 'name', 'nombre', 'description', 'descripcion', 'concept', 'concepto', 'type', 'date', 'direction', 'planOne', 'planTwo', 'planThree', 'planFour', 'planFive', 'modelOne', 'modelTwo', 'modelThree', 'modelFour', 'modelFive', 'renderingOne', 'renderingTwo', 'renderingThree', 'renderingFour', 'renderingFive'];

    public $id;
    public $name;
    public $nombre;
    public $description;
    public $descripcion;
    public $concept;
    public $concepto;
    public $type;
    public $date;
    public $direction;

    public $planOne;
    public $planTwo;
    public $planThree;
    public $planFour;
    public $planFive;

    public $modelOne;
    public $modelTwo;
    public $modelThree;
    public $modelFour;
    public $modelFive;

    public $renderingOne;
    public $renderingTwo;
    public $renderingThree;
    public $renderingFour;
    public $renderingFive;

    public function __construct($args = []) {

        $this->id = $args['id'] ?? NULL;
        $this->name = $args['name'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->concept = $args['concept'] ?? '';
        $this->concepto = $args['concepto'] ?? '';
        $this->type = $args['type'] ?? '';
        $this->date = $args['date'] ?? NULL;
        $this->direction = $args['direction'] ?? '';

        $this->planOne = $args['planone'] ?? '';
        $this->planTwo = $args['plantwo'] ?? '';
        $this->planThree = $args['planthree'] ?? '';
        $this->planFour = $args['planfour'] ?? '';
        $this->planFive = $args['planfive'] ?? '';
        
        $this->modelOne = $args['modelone'] ?? '';
        $this->modelTwo = $args['modeltwo'] ?? '';
        $this->modelThree = $args['modelthree'] ?? '';
        $this->modelFour = $args['modelfour'] ?? '';
        $this->modelFive = $args['modelfive'] ?? '';

        $this->renderingOne = $args['renderingone'] ?? '';
        $this->renderingTwo = $args['renderingtwo'] ?? '';
        $this->renderingThree = $args['renderingthree'] ?? '';
        $this->renderingFour = $args['renderingfour'] ?? '';
        $this->renderingFive = $args['renderingfive'] ?? '';
    }

    public function validate() {
        if(!$this->name) {
            self::$bugs[] = "The title is mandatory";
        }

        if(!$this->nombre) {
            self::$bugs[] = "El titulo es obligatorio";
        }

        if(!$this->description) {
            self::$bugs[] = "The description is mandatory";
        }

        if(!$this->descripcion) {
            self::$bugs[] = "La descricion es obligatoria";
        }
        
        if(!$this->concept) {
            self::$bugs[] = "The concepts is mandatory";
        }

        if(!$this->concepto) {
            self::$bugs[] = "El concepto es obligatorio";
        }

        if(!$this->type) {
            self::$bugs[] = "The type is mandatory";
        }

        if(!$this->date) {
            self::$bugs[] = "The date is mandatory";
        }

        if(!$this->direction) {
            self::$bugs[] = "The direction is mandatory";
        }

        return self::$bugs;
    }

    
}