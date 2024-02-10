<main class="homepage admin container">
    <h1 class="admin__title">homepage</h1>
    <a href="/admin" class="admin__button">Return</a>

    <?php foreach($bugs as $bug): ?>

    <div class="alert bug">
        <?php echo $bug; ?>
    </div>

    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>About You Data</legend>

            <label for="title">About Title:</label>
            <input type="text" id="title" name="title" value="<?php echo s($home->title); ?>">

            <label for="about">About Info:</label>
            <textarea id="about" name="about"><?php echo s($home->about); ?></textarea>

            <label for="more">More About:</label>
            <textarea id="more" name="more"><?php echo s($home->more); ?></textarea>
            
            <label for="imgAbout" class="custom-file-input">About Image:</label>
            <input type="file" id="imgAbout" accept="image/jpeg, image/png" name="imgAbout">

            <?php if(!empty($home->imgAbout)): ?>
                <img class="small_image" src="../../images/<?php echo s($home->imgAbout) ?>" alt="about image">
            <?php endif; ?>

        </fieldset>
        <fieldset>
            <legend>Datos Sobre Ti</legend>

            <label for="titulo">Titulo Acerca de ti:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo s($home->titulo); ?>">

            <label for="acerca">Informacion Acerca de ti:</label>
            <textarea id="acerca" name="acerca"><?php echo s($home->acerca); ?></textarea>

            <label for="mas">Mas Informacion:</label>
            <textarea id="mas" name="mas"><?php echo s($home->mas); ?></textarea>

        </fieldset>
        <fieldset>
            <legend>Slider</legend>

            <label for="sliderOne" class="custom-file-input">First Image:</label>
            <input type="file" id="sliderOne" accept="image/jpeg, image/png" name="sliderOne">

            <?php if(!empty($home->sliderOne)): ?>
                <img class="small_image" src="../../images/<?php echo $home->sliderOne ?>" alt="slider image">
            <?php endif; ?>

            <label for="sliderTwo" class="custom-file-input">Second Image:</label>
            <input type="file" id="sliderTwo" accept="image/jpeg, image/png" name="sliderTwo">

            <?php if(!empty($home->sliderTwo)): ?>
                <img class="small_image" src="../../images/<?php echo $home->sliderTwo ?>" alt="slider image">
            <?php endif; ?>

            <label for="sliderThree" class="custom-file-input">Third Image:</label>
            <input type="file" id="sliderThree" accept="image/jpeg, image/png" name="sliderThree">

            <?php if(!empty($home->sliderThree)): ?>
                <img class="small_image" src="../../images/<?php echo $home->sliderThree ?>" alt="slider image">
            <?php endif; ?>

            <label for="sliderFour" class="custom-file-input">Fourth Image:</label>
            <input type="file" id="sliderFour" accept="image/jpeg, image/png" name="sliderFour">

            <?php if(!empty($home->sliderFour)): ?>
                <img class="small_image" src="../../images/<?php echo $home->sliderFour ?>" alt="slider image">
            <?php endif; ?>

            <label for="sliderFive" class="custom-file-input">Fifth Image:</label>
            <input type="file" id="sliderFive" accept="image/jpeg, image/png" name="sliderFive">

            <?php if(!empty($home->sliderFive)): ?>
                <img class="small_image" src="../../images/<?php echo $home->sliderFive ?>" alt="slider image">
            <?php endif; ?>

        </fieldset>
        <input type="submit" value="Update Homepage" class="admin__button">
    </form>

</main>