<h1><?= $title ?></h1>
<div>
    <?php foreach ($posts as $post): ?>
        <div>
            <h3><?= $post ?></h3>
            <img src="<?= base_url('assets/images/image.jpg') ?>" alt="Blog Image" style="width: 100%; height: auto;">
        </div>
    <?php endforeach; ?>
</div>
