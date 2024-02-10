<?php

namespace Model;

class Home extends Crud {

    protected static $table = 'home';
    protected static $columnsDB = ['id', 'title', 'titulo', 'about', 'acerca', 'more', 'mas', 'imgAbout', 'sliderOne', 'sliderTwo', 'sliderThree', 'sliderFour', 'sliderFive'];

    public $id;
    public $title;
    public $titulo;
    public $about;
    public $acerca;
    public $more;
    public $mas;
    public $imgAbout;

    public $sliderOne;
    public $sliderTwo;
    public $sliderThree;
    public $sliderFour;
    public $sliderFive;

    public function __construct($args = []) {

        $this->id = $args['id'] ?? NULL;
        $this->title = $args['title'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->about = $args['about'] ?? '';
        $this->acerca = $args['acerca'] ?? '';
        $this->more = $args['more'] ?? '';
        $this->mas = $args['mas'] ?? '';
        $this->imgAbout = $args['imgAbout'] ?? '';

        $this->sliderOne = $args['sliderOne'] ?? '';
        $this->sliderTwo = $args['sliderTwo'] ?? '';
        $this->sliderThree = $args['sliderThree'] ?? '';
        $this->sliderFour = $args['sliderFour'] ?? '';
        $this->sliderFive = $args['sliderFive'] ?? '';

    }

    public function validate() {
        if(!$this->title) {
            self::$bugs[] = "The title is mandatory";
        }

        if(!$this->titulo) {
            self::$bugs[] = "El titulo es obligatorio";
        }

        if(!$this->about) {
            self::$bugs[] = "The about information is mandatory";
        }

        if(!$this->acerca) {
            self::$bugs[] = "La informacion acerca de ti es obligatoria";
        }

        if(!$this->more) {
            self::$bugs[] = "The about information more is mandatory";
        }

        if(!$this->mas) {
            self::$bugs[] = "La informacion de complemento es obligatoria";
        }

        return self::$bugs;

    }

}