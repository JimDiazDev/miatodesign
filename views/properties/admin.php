<main class="admin container">
    <h1 class="admin__title">Admin MiatoDesign</h1>

    <?php if($result) { ?>
        <?php if( intval( $result ) === 1): ?>
            <p class="alert success">project successfully created</p>
        <?php elseif( intval( $result ) === 2 ):  ?>
            <p class="alert success">correctly updated</p>
        <?php elseif( intval( $result ) === 3 ):  ?>
            <p class="alert success">correctly deleted</p>
        <?php endif; ?>
    <?php } ?>

    <div class="admin__button_conteiner conteiner">
        <a href="properties/create" class="admin__button">New Project</a>
        <a href="/properties/home?id=1" class="admin__button">Update Homepage</a>
        <a href="/properties/portfolio?id=1" class="admin__button">Update Porfolio</a>
        <a href="/properties/services?id=1" class="admin__button">Update Services</a>
        <a href="/properties/contact?id=1" class="admin__button">Update Contact</a>
    </div>

    <!-- Show Results -->

    <div class="projects__cards conteiner">
        <?php foreach( $property as $project ): ?>
        
        <div class="project__card">
            <img src="../images/<?php echo( $project->renderingOne ); ?>" alt="Project image">
            <p class="project__name"><?php echo( $project->name ); ?></p>
            <a class="project__update" href="properties/project?id=<?php echo $project->id; ?>">update</a>
            <form method="POST" action="/properties/delete" class="project__delete">
                <input type="hidden" name="id" value="<?php echo $project->id; ?>">
                <input type="submit" value="delete">
            </form>
        </div>

        <?php endforeach; ?>
    </div>
</main>
