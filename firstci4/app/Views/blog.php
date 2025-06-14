<!DOCTYPE html>
<html lang="en">
<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <h1>Blog Overview</h1>
    <div class="row">
        <?= $this->include('partials/sideBar') ?>
        <div class="col-12 col-sm-9">
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
    </div>
</div>
<?= $this->endSection() ?>

</html>