<main class="admin container">
    <h1 class="admin__title">Update Project</h1>
    <a href="/admin" class="admin__button">Return</a>

    <?php foreach($bugs as $bug): ?>
        <div class="alert bug">
            <?php echo $bug; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . "/form.php"; ?>
        <input type="submit" value="Update Project" class="admin__button">
    </form>
</main>