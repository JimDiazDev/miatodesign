<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $language = $_SESSION['language'] ?? NULL;
    $depends = $language === 'es'; 
?>
<main>

<div class="container">
    <img
        loading="lazy"
        width="200"
        height="300"
        src="./images/<?php echo s($project->renderingOne); ?>"
        alt="First proyect rendering"
    />
</div>

<div class="work__text container">
    <h3><?php echo $depends ? s($project->nombre) : s($project->name) ; ?></h3>
    <div class="work__data">
        <div class="work__dates">
            <span><?php echo $depends ? 'Tipo de Proyecto: ' : 'Proyect Type: ' ; ?></span>
            <p><?php
                if($project->type == 1){
                    $typeText =  $depends ? 'Comercial' : 'Commercial';
                } else {
                    $typeText = $depends ? 'Recidencial' : 'Residential';
                }
                echo $typeText;
            ?></p>
        </div>
        <div class="work__dates">
            <span><?php echo $depends ? 'Fecha: ' : 'Date: ' ; ?></span>
            <p><?php echo s($project->date); ?></p>
        </div>
        <div class="work__dates">
            <span><?php echo $depends ? 'Concepto: ' : 'Scope: ' ; ?></span>
            <p><?php echo $depends ? s($project->concepto) : s($project->concept) ; ?></p>
        </div>
    </div>
    <textarea readonly><?php echo $depends ? s($project->descripcion) : s($project->description) ; ?></textarea>
</div>

<!-- Renderings -->

<?php if($project->renderingTwo) : ?>
    <div class="work__renderings container">

        <img
            class="work__render2"
            loading="lazy"
            width="200"
            height="300"
            src="./images/<?php echo s($project->renderingTwo); ?>"
            alt="Second rendering"
        />

        <?php if($project->renderingThree) : ?>
            <img
                class="work__render3"
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->renderingThree); ?>"
                alt="Third rendering"
            />
        <?php endif; ?>

        <?php if($project->renderingFour) : ?>
            <img
                class="work__render4"
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->renderingFour); ?>"
                alt="Fourth rendering"
            />
        <?php endif; ?>

        <?php if($project->renderingFive) : ?>
            <img
                class="work__render5"
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->renderingFive); ?>"
                alt="Five rendering"
            />
        <?php endif; ?>
        
    </div>
<?php endif; ?>


<!-- Models -->
<?php if($project->modelOne) : ?>
    <div class="work__construccions container">
        <h4><?php echo $depends ? 'Modelos 3D' : '3D Models' ; ?></h4>

        <img
            loading="lazy"
            width="200"
            height="300"
            src="./images/<?php echo s($project->modelOne); ?>"
            alt="First model"
        />
            
        <?php if($project->modelTwo) : ?>
            <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->modelTwo); ?>"
                alt="Second model"
            />
        <?php endif; ?>


        <?php if($project->modelThree) : ?>
            <img
                class="work__plane3"
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->modelThree); ?>"
                alt="Thrid model"
            />
        <?php endif; ?>

        <?php if($project->modelFour) : ?>
            <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->modelFour); ?>"
                alt="Fourth model"
            />
        <?php endif; ?>
        
        <?php if($project->modelFive) : ?>
            <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->modelFive); ?>"
                alt="Fifth model"
            />
        <?php endif; ?>   
    </div>
<?php endif; ?>

<!-- Construction Plans -->
<?php if($project->planOne) : ?>
    <div class="work__construccions container">
        <h4><?php echo $depends ? 'Planos de Construcción' : 'Construccion Plans' ; ?></h4>

        <img
            loading="lazy"
            width="200"
            height="300"
            src="./images/<?php echo s($project->planOne); ?>"
            alt="First construccion plan"
        />
            
        <?php if($project->planTwo) : ?>
            <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->planTwo); ?>"
                alt="Second construccion plan"
            />
        <?php endif; ?>


        <?php if($project->planThree) : ?>
            <img
                class="work__plane3"
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->planThree); ?>"
                alt="Thrid construccion plan"
            />
        <?php endif; ?>

        <?php if($project->planFour) : ?>
            <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->planFour); ?>"
                alt="Fourth construccion plan"
            />
        <?php endif; ?>
        
        <?php if($project->planFive) : ?>
            <img
                loading="lazy"
                width="200"
                height="300"
                src="./images/<?php echo s($project->planFive); ?>"
                alt="Fifth construccion plan"
            />
        <?php endif; ?>   
    </div>
<?php endif; ?>

</main>