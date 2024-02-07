<main class="admin container">
    <h1 class="admin__title">Create new Project</h1>
    <a href="/admin" class="admin__button">Return</a>

    <?php foreach($bugs as $bug): ?>
        <div class="alert bug">
            <?php echo $bug; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data" action="/properties/create">
        <?php include __DIR__ . "/form.php"; ?>
        <input type="submit" value="Create Project" class="admin__button">
    </form>
</main>