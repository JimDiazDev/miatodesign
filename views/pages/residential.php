<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $language = $_SESSION['language'] ?? NULL;
    $depends = $language === 'es'; 
?>
<main class="comercial">    
    <div class="portfolio__proyects container">
        <h1><?php echo $depends ? 'Diseños Recidenciales' : 'Recidential Designs' ; ?></h1>
        <div class="proyects__container">
            <?php foreach($property as $project) { ?>
                <?php if($project->type === '2'): ?>

                    <div class="proyects__box proyects <?php echo $project->direction == '1' ? 'proyects__box--right' : ''; ?>">
                        <a href="./project.php?id=<?php echo s($project->id); ?>">
                            <img src="./images/<?php echo s($project->renderingOne); ?>" alt="project photo">
                        </a>

                        <div class="proyects__text">
                            <h4><?php echo $depends ? s($project->nombre) : s($project->name) ; ?></h4>
                        </div>
                    </div>

                <?php endif; ?>
            <?php }; ?>
        </div>
    </div>
</main>