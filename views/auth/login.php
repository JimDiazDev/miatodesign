<main class="admin content__center">
    <h1 class="admin__title">Log in</h1>

    <?php foreach($bugs as $bug): ?>
        <div class="alert bug">
            <?php echo $bug; ?>
        </div>

    <?php endforeach; ?>

    <form method="POST" action="/login">
        <fieldset>
            <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="your email" id="email">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="your password" id="password">

        </fieldset>

        <input type="submit" value="Log in" class="admin__button">
    </form>
</main>