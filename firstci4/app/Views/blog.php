<!DOCTYPE html>
<html lang="en">
<div class="container">
    <h1>Blog Overview</h1>
    <div class="row">
        <?php if (empty($posts)): ?>
            <div class="col-12">
                <p>No posts available.</p>
            </div>
        <?php else: ?>
            <?php foreach ($posts as $post): ?>
                <?= view_cell('App\Libraries\Blog::postItems', ['post' => $post]) ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

</html>