<?php

namespace Model;

class Services extends Crud {

    protected static $table = 'services';
    protected static $columnsDB = ['id', 'titleOne', 'tituloUno', 'desOne', 'desUno', 'imageOne', 'titleTwo', 'tituloDos', 'desTwo', 'desDos', 'imageTwo', 'titleThree', 'tituloTres', 'desThree', 'desTres', 'imageThree', 'titleFour', 'tituloCuatro', 'desFour', 'desCuatro', 'imageFour'];

    public $id;
    public $titleOne;
    public $tituloUno;
    public $desOne;
    public $desUno;
    public $imageOne;

    public $titleTwo;
    public $tituloDos;
    public $desTwo;
    public $desDos;
    public $imageTwo;

    public $titleThree;
    public $tituloTres;
    public $desThree;
    public $desTres;
    public $imageThree;

    public $titleFour;
    public $tituloCuatro;
    public $desFour;
    public $desCuatro;
    public $imageFour;


    public function __construct($args = []) {

        $this->id = $args['id'] ?? NULL;
        $this->titleOne = $args['titleOne'] ?? '';
        $this->tituloUno = $args['tituloUno'] ?? '';
        $this->desOne = $args['desOne'] ?? '';
        $this->desUno = $args['desUno'] ?? '';
        $this->imageOne = $args['imageOne'] ?? '';

        $this->titleTwo = $args['titleTwo'] ?? '';
        $this->tituloDos = $args['tituloDos'] ?? '';
        $this->desTwo = $args['desTwo'] ?? '';
        $this->desDos = $args['desDos'] ?? '';
        $this->imageTwo = $args['imageTwo'] ?? '';

        $this->titleThree = $args['titleThree'] ?? '';
        $this->tituloTres = $args['tituloTres'] ?? '';
        $this->desThree = $args['desThree'] ?? '';
        $this->desTres = $args['desTres'] ?? '';
        $this->imageThree = $args['imageThree'] ?? '';

        $this->titleFour = $args['titleFour'] ?? '';
        $this->tituloCuatro = $args['tituloCuatro'] ?? '';
        $this->desFour = $args['desFour'] ?? '';
        $this->desCuatro = $args['desCuatro'] ?? '';
        $this->imageFour = $args['imageFour'] ?? '';

    }

    public function validate() {
        if(!$this->titleOne) {
            self::$bugs[] = "The title of first service is mandatory";
        }

        if(!$this->tituloUno) {
            self::$bugs[] = "El titulo del primer servicio es obligatorio";
        }

        if(!$this->desOne) {
            self::$bugs[] = "The description of first service is mandatory";
        }

        if(!$this->desUno) {
            self::$bugs[] = "La descripcion del primer servicio es obligatoria";
        }

        if(!$this->imageOne) {
            self::$bugs[] = "The image of first service is mandatory";
        }

        if(!$this->titleTwo) {
            self::$bugs[] = "The title of second service is mandatory";
        }

        if(!$this->tituloDos) {
            self::$bugs[] = "El titulo del segundo servicio es obligatorio";
        }

        if(!$this->desTwo) {
            self::$bugs[] = "The description of second service is mandatory";
        }

        if(!$this->desDos) {
            self::$bugs[] = "La descripcion del segundo servicio es obligatoria";
        }

        if(!$this->imageTwo) {
            self::$bugs[] = "The image of second service is mandatory";
        }

        if(!$this->titleThree) {
            self::$bugs[] = "The title of third service is mandatory";
        }

        if(!$this->tituloTres) {
            self::$bugs[] = "El titulo del tercer servicio es obligatorio";
        }

        if(!$this->desThree) {
            self::$bugs[] = "The description of third service is mandatory";
        }

        if(!$this->desTres) {
            self::$bugs[] = "La descripcion del tercer servicio es obligatoria";
        }

        if(!$this->imageThree) {
            self::$bugs[] = "The image of third service is mandatory";
        }

        if(!$this->titleFour) {
            self::$bugs[] = "The title of fourth service is mandatory";
        }

        if(!$this->tituloCuatro) {
            self::$bugs[] = "El titulo del cuarto servicio es obligatorio";
        }

        if(!$this->desFour) {
            self::$bugs[] = "The description of fourth service is mandatory";
        }

        if(!$this->desCuatro) {
            self::$bugs[] = "La descripcion del cuarto servicio es obligatoria";
        }

        if(!$this->imageFour) {
            self::$bugs[] = "The image of fourth service is mandatory";
        }

        return self::$bugs;
    }

}