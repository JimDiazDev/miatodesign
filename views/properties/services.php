<main class="admin container">
    <h1 class="admin__title">Update Services</h1>
    <a href="/admin" class="admin__button">Return</a>

    <?php foreach($bugs as $bug): ?>

        <div class="alert bug">
            <?php echo $bug; ?>
        </div>

    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>First Service</legend>

            <label for="titleOne">Title:</label>
            <input type="text" id="titleOne" name="titleOne" value="<?php echo s($services->titleOne); ?>">

            <label for="tituloUno">Titulo:</label>
            <input type="text" id="tituloUno" name="tituloUno" value="<?php echo s($services->tituloUno); ?>">

            <label for="desOne">Description:</label>
            <textarea id="desOne" name="desOne"><?php echo s($services->desOne);?></textarea>

            <label for="desUno">Descripcion:</label>
            <textarea id="desUno" name="desUno"><?php echo s($services->desUno);?></textarea>

            <label for="imageOne" class="custom-file-input">Image:</label>
            <input type="file" id="imageOne" accept="image/jpeg, image/png" name="imageOne">

            <?php if(!empty($services->imageOne)): ?>
                    <img class="small_image" src="../../images/<?php echo s($services->imageOne) ?>" alt="first image service">
            <?php endif; ?>

        </fieldset>

        <fieldset>
            <legend>Second Service</legend>

            <label for="titleTwo">Title:</label>
            <input type="text" id="titleTwo" name="titleTwo" value="<?php echo s($services->titleTwo); ?>">

            <label for="tituloDos">Titulo:</label>
            <input type="text" id="tituloDos" name="tituloDos" value="<?php echo s($services->tituloDos); ?>">

            <label for="desTwo">Description:</label>
            <textarea id="desTwo" name="desTwo"><?php echo s($services->desTwo);?></textarea>

            <label for="desDos">Descripcion:</label>
            <textarea id="desDos" name="desDos"><?php echo s($services->desDos);?></textarea>

            <label for="imageTwo" class="custom-file-input">Image:</label>
            <input type="file" id="imageTwo" accept="image/jpeg, image/png" name="imageTwo">

            <?php if(!empty($services->imageTwo)): ?>
                    <img class="small_image" src="../../images/<?php echo s($services->imageTwo); ?>" alt="second image service">
            <?php endif; ?>

        </fieldset>

        <fieldset>
            <legend>Thrid Service</legend>

            <label for="titleThree">Title:</label>
            <input type="text" id="titleThree" name="titleThree" value="<?php echo s($services->titleThree); ?>">

            <label for="tituloTres">Titulo:</label>
            <input type="text" id="tituloTres" name="tituloTres" value="<?php echo s($services->tituloTres); ?>">

            <label for="desThree">Description:</label>
            <textarea id="desThree" name="desThree"><?php echo s($services->desThree);?></textarea>

            <label for="desTres">Descripcion:</label>
            <textarea id="desTres" name="desTres"><?php echo s($services->desTres);?></textarea>

            <label for="imageThree" class="custom-file-input">Image:</label>
            <input type="file" id="imageThree" accept="image/jpeg, image/png" name="imageThree">

            <?php if(!empty($services->imageThree)): ?>
                    <img class="small_image" src="../../images/<?php echo s($services->imageThree) ?>" alt="thrid image service">
            <?php endif; ?>

        </fieldset>

        <fieldset>
            <legend>Fourth Service</legend>

            <label for="titleFour">Title:</label>
            <input type="text" id="titleFour" name="titleFour" value="<?php echo s($services->titleFour); ?>">

            <label for="tituloCuatro">Titulo:</label>
            <input type="text" id="tituloCuatro" name="tituloCuatro" value="<?php echo s($services->tituloCuatro); ?>">

            <label for="desFour">Description:</label>
            <textarea id="desFour" name="desFour"><?php echo s($services->desFour);?></textarea>

            <label for="desCuatro">Descriction:</label>
            <textarea id="desCuatro" name="desCuatro"><?php echo s($services->desCuatro);?></textarea>

            <label for="imageFour" class="custom-file-input">Image:</label>
            <input type="file" id="imageFour" accept="image/jpeg, image/png" name="imageFour">

            <?php if(!empty($services->imageFour)): ?>
                    <img class="small_image" src="../../images/<?php echo s($services->imageFour) ?>" alt="fourth image service">
            <?php endif; ?>

        </fieldset>

        <input type="submit" value="Update Services" class="admin__button">
    </form>
</main>