<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $language = $_SESSION['language'] ?? NULL;
    $depends = $language === 'es'; 
?>
<main class="services">
<!------------------------------------------------->
<!------------------- SERVICES -------------------->
<!------------------------------------------------->
    <h2 class="services__title"><?php echo $depends ? 'Servicios' : 'Services' ; ?></h2>

    <div class="services__container container">
        <div class="services__line">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="3"
                height="2300"
                viewBox="0 0 3 2401"
                fill="none"
            >
                <path d="M1.5 0.5V2400.5" stroke="#D6CEC8" stroke-width="2" />
            </svg>
        </div>

        <div class="services__text st1">
            <h3><?php echo $depends ? s($services->tituloUno) : s($services->titleOne) ; ?></h3>
            <p><?php echo $depends ? s($services->desUno) : s($services->desOne) ; ?></p>
        </div>

        <div class="services__img si1">
            <picture>
                <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($services->imageOne); ?>"
                alt="First service image"
                />
            </picture>
        </div>

        <div class="services__text st2">
            <h3><?php echo $depends ? s($services->tituloDos) : s($services->titleTwo) ; ?></h3>
            <p><?php echo $depends ? s($services->desDos) : s($services->desTwo) ; ?></p>
        </div>

        <div class="services__img si2">
            <picture>
                <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($services->imageTwo); ?>"
                alt="Second service image"
                />
            </picture>
        </div>

        <div class="services__text st3">
            <h3><?php echo $depends ? s($services->tituloTres) : s($services->titleThree) ; ?></h3>
            <p><?php echo $depends ? s($services->desTres) : s($services->desThree) ; ?></p>
        </div>

        <div class="services__img si3">
            <picture>
                <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($services->imageThree); ?>"
                alt="Thrid service image"
                />
            </picture>
        </div>

        <div class="services__text st4">
            <h3><?php echo $depends ? s($services->tituloCuatro) : s($services->titleFour) ; ?></h3>
            <p><?php echo $depends ? s($services->desCuatro) : s($services->desFour) ; ?></p>
        </div>

        <div class="services__img si4">
            <picture>
                <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($services->imageFour); ?>"
                alt="Fourth service image"
                />
            </picture>
        </div>
    </div>
</main>