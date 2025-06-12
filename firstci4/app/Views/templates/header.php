<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= (isset($meta_title) ? $meta_title : 'Default Title') ?></title>
</head>
<body>
    <nav>
        <h1><?= (isset($title) ? $title : 'Default Title') ?></h1>
        <ul>
            <li><a href="/firstci4/public/blog">Blog Home</a></li>
            <li><a href="/firstci4/public/blog/create">Create New Post</a></li>
        </ul>
    </nav>
</body>
</html>