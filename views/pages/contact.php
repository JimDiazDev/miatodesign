<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $language = $_SESSION['language'] ?? NULL;
    $depends = $language === 'es'; 
?>
<main class="iscontact">

    <div class="contact">
        <h3><?php echo $depends ? 'Contacto' : 'Contact' ; ?></h3>
        <div class="contact__container container">
        <div class="contact__text">
            <h4><?php echo $depends ? 'Hola' : 'Hello' ; ?></h4>
            <p><?php echo $depends ? 'Hablemos de diseñar y construir su próximo diseño' : 'I can help design and build you next design' ; ?></p>
            <p><?php echo $depends ? 'Correo: ' : 'Email: ' ; ?><?php echo s($contact->email)?></p>
            <p><?php echo $depends ? 'Teléfono: ' : 'Phone: ' ; ?><?php echo s($contact->phone)?></p>
        </div>

        <div class="contact__always">
            <h4><?php echo $depends ? 'Siempre estoy interesada en' : "I'm always interesed about" ; ?></h4>

            <a href="mailto:Heidi3981@gmail.com?subject=Let's%20talk"><?php echo s($contact->interOne)?></a>

            <?php if(!empty($contact->interTwo)): ?>
                <a href="mailto:Heidi3981@gmail.com?subject=Let's%20talk"><?php echo s($contact->interTwo)?></a>
            <?php endif; ?>

            <?php if(!empty($contact->interThree)): ?>
            <a href="mailto:Heidi3981@gmail.com?subject=Let's%20talk"><?php echo s($contact->interThree)?></a>
            <?php endif; ?>

            <?php if(!empty($contact->interFour)): ?>
            <a href="mailto:Heidi3981@gmail.com?subject=Let's%20talk"><?php echo s($contact->interFour)?></a>
            <?php endif; ?>

            <?php if(!empty($contact->interFive)): ?>
            <a href="mailto:Heidi3981@gmail.com?subject=Let's%20talk"><?php echo s($contact->interFive)?></a>
            <?php endif; ?>

        </div>

        <div class="contact__end">
            <p><?php echo $depends ? '¿Algun Proyecto en mente?' : 'Are you minding a proyect?' ; ?></p>
            <a href="mailto:Heidi3981@gmail.com"><?php echo $depends ? 'Contácteme' : 'Contact me' ; ?></a>
        </div>
        </div>
    </div>

</main>