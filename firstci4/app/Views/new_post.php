<!DOCTYPE html>
<html lang="en">
<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <h1><?= $title ?></h1>
    <div class="row">
        <div class="col=12 col-md-8 offset-md-2">
            <form method="post" action="/firstci4/public/blog/new">
                <div class="form-group">
                    <label for="post_title">Post Title</label>
                    <input type="text" class="form-control" id="post_title" name="post_title" required>
                </div>
                <div class="form-group">
                    <label for="post_content">Post Content</label>
                    <textarea class="form-control" id="post_content" name="post_content" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>

    </div>
</div>
<?= $this->endSection() ?>

</html>