<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $language = $_SESSION['language'] ?? NULL;
    $depends = $language === 'es'; 
?>
<main class="homepage">
    <div class="portrate">
        <div class="portrate__slide">

            <img
            width="200"
            height="300"
            src="./images/<?php echo s($home->sliderOne); ?>"
            alt="Slider image one"
            />

            <img
            width="200"
            height="300"
            src="./images/<?php echo s($home->sliderTwo); ?>"
            alt="Slider image two"
            />

            <img
            width="200"
            height="300"
            src="./images/<?php echo s($home->sliderThree); ?>"
            alt="Slider image three"
            />

            <img
            width="200"
            height="300"
            src="./images/<?php echo s($home->sliderFour); ?>"
            alt="Slider image four"
            />

            <img
            width="200"
            height="300"
            src="./images/<?php echo s($home->sliderFive); ?>"
            alt="Slider image five"
            />

        </div>

        <div class="portrate__arrows">
            <svg
                class="left"
                xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-arrow-left"
                width="40"
                height="40"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#ffffff"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l14 0" />
                <path d="M5 12l6 6" />
                <path d="M5 12l6 -6" />
            </svg>
            <svg
                class="right"
                xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-arrow-right"
                width="40"
                height="40"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#ffffff"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l14 0" />
                <path d="M13 18l6 -6" />
                <path d="M13 6l6 6" />
            </svg>
        </div>

        <div class="portrate__text">
            <h2>miato Design</h2>
            <p><?php echo $depends ? 'diseñadora de interiores' : 'interior designer'; ?></p>
        </div>
    </div>
    
    <!------------------------------------------------->
    <!-------------------- ABOUT ---------------------->
    <!------------------------------------------------->

    <div class="about container">
        <picture>
            <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($home->imgAbout); ?>"
                alt="about image"
            />
        </picture>

        <div class="about__text">
            <span><?php echo $depends ? 'Acerca de mi' : 'About me' ; ?></span>
            <h2><?php echo $depends ? s($home->titulo) : s($home->title); ?></h2>
            <p><?php echo $depends ? s($home->acerca) : s($home->about) ; ?></p>
        </div>
    </div>

    <!------------------------------------------------->
    <!------------------ HOME MENU -------------------->
    <!------------------------------------------------->

    <div class="links container">
        <div class="links__text">
            <h3><?php echo $depends ? 'Mas acerca de mi'  : 'More about me'; ?></h3>
            <p><?php echo $depends ? $home->mas : $home->more ; ?></p>
        </div>
        <div class="links__list">
            <a href="/portfolio"><?php echo $depends ? 'PORTAFOLIO' : 'PORTFOLIO' ; ?></a>
            <a href="/services"><?php echo $depends ? 'SERVICIOS' : 'SERVICES' ; ?></a>
            <a href="/contact"><?php echo $depends ? 'CONTACTO' : 'CONTACT' ; ?></a>
        </div>
    </div>

</main>