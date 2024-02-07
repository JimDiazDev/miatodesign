<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $language = $_SESSION['language'] ?? NULL;
    $depends = $language === 'es'; 
?>
<main class="portfolio">
    <!------------------------------------------------->
    <!------------------ PORTFOLIO -------------------->
    <!------------------------------------------------->

    <div class="portfolio__portrate container">
        <h1><?php echo $depends ? s($portfolio->titulo) : s($portfolio->title) ; ?></h1>
        <p><?php echo $depends ? s($portfolio->descripcion) : s($portfolio->description); ?></p>
    </div>

    <div class="portfolio__options container">
        <div class="options__box">
            <a href="/comercial">
                <img
                    loading="lazy"
                    width="200"
                    height="300"
                    src="./images/<?php echo s($portfolio->imgOne); ?>"
                    alt="Comercial designs image"
                />
            </a>
            <h2><?php echo $depends ? 'Diseños Comerciales' : 'Comercial Desings' ; ?></h2>
        </div>
        <div class="options__box">
            <a href="/residential">
                <img
                    loading="lazy"
                    width="200"
                    height="300"
                    src="./images/<?php echo s($portfolio->imgTwo); ?>"
                    alt="Residencial desings image"
                />
            </a>
            <h2><?php echo $depends ? 'Diseños Recidenciales' : 'Recidential Desings' ; ?></h2>
        </div>
    </div>

    <!------------------------------------------------->
    <!--------------- SOME PORYECTS ------------------->
    <!------------------------------------------------->

    <div class="portfolio__proyects">
        <h3><?php echo $depends ? 'Mis Proyectos' : 'My Projects' ; ?></h3>
        <div class="proyects__container container">
            <?php foreach( $property as $project ) { ?>

            <div class="proyects__box proyects <?php echo $project->direction == '1' ? 'proyects__box--right' : ''; ?>">
                <a href="/project?id=<?php echo $project->id; ?>">
                    <img src="./images/<?php echo $project->renderingOne; ?>" alt="project photo">
                </a>

                <div class="proyects__text">
                    <h4><?php echo $depends ? s($project->nombre) : s($project->name) ; ?></h4>
                    <span><?php
                        if($project->type == 1){
                            $typeText =  $depends ? 'Comercial' : 'Commercial';
                        } else {
                            $typeText = $depends ? 'Recidencial' : 'Residential';
                        }
                        echo $typeText;
                    ?></span>
                </div>

            </div>

            <?php }; ?>
        </div>
    </div>
</main>