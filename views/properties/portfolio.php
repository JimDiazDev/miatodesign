<main class="admin container">
    <h1 class="admin__title">Update Portfolio</h1>
    <a href="/admin" class="admin__button">Return</a>

    <?php foreach($bugs as $bug): ?>

    <div class="alert bug">
        <?php echo $bug; ?>
    </div>

    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Data</legend>

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo s($portfolio->title); ?>">

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo s($portfolio->titulo); ?>">

            <label for="description">Description:</label>
            <textarea id="description" name="description"><?php echo s($portfolio->description);?></textarea>

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion"><?php echo s($portfolio->descripcion);?></textarea>

            <label for="imgOne" class="custom-file-input">Comercial Image:</label>
            <input type="file" id="imgOne" accept="image/jpeg, image/png" name="imgOne">

            <?php if(!empty($portfolio->imgOne)): ?>
                <img class="small_image" src="../../images/<?php echo s($portfolio->imgOne) ?>" alt="comercial image">
            <?php endif; ?>

            <label for="imgTwo" class="custom-file-input">Residential Image:</label>
            <input type="file" id="imgTwo" accept="image/jpeg, image/png" name="imgTwo">

            <?php if(!empty($portfolio->imgTwo)): ?>
                <img class="small_image" src="../../images/<?php echo s($portfolio->imgTwo); ?>" alt="recidential image">
            <?php endif; ?>

        </fieldset>
        <input type="submit" value="Update Portfolio" class="admin__button">
    </form>
</main>