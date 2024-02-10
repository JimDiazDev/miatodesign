<main class="admin container">
    <h1 class="admin__title">Update Contact</h1>
    <a href="/admin" class="admin__button">Return</a>

    <?php foreach($bugs as $bug): ?>

    <div class="alert bug">
        <?php echo $bug; ?>
    </div>

    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Contact information</legend>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo s($contact->email); ?>">

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo s($contact->phone); ?>">

        </fieldset>

        <fieldset>
            <legend>I'm always interesed about</legend>

            <label for="interOne">First interest:</label>
            <input type="text" id="interOne" name="interOne" value="<?php echo s($contact->interOne); ?>">

            <label for="interTwo">Second interest:</label>
            <input type="text" id="interTwo" name="interTwo" value="<?php echo s($contact->interTwo); ?>">

            <label for="interThree">Third interest:</label>
            <input type="text" id="interThree" name="interThree" value="<?php echo s($contact->interThree); ?>">

            <label for="interFour">Fourth interest:</label>
            <input type="text" id="interFour" name="interFour" value="<?php echo s($contact->interFour); ?>">

            <label for="interFive">Fifth interest:</label>
            <input type="text" id="interFive" name="interFive" value="<?php echo s($contact->interFive); ?>">

        </fieldset>

        <input type="submit" value="Update Contact" class="admin__button">
    </form>
</main>