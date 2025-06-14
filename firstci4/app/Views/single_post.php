<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <h1>Single Blog Post</h1>
    <div class="row">
        <?= $this->include('partials/sideBar') ?>
        <div class="col-12 col-sm-9">
            <div class="row">
                <p>Welcome to the single blog post page!</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>