<!DOCTYPE html>
<html>

<head>
    <title>Create Test Post</title>
</head>

<body>
    <h1>Create a Test Blog Post</h1>
    <form method="post" action="/firstci4/public/test-post">
        <label>Post Title:</label><br>
        <input type="text" name="post_title" required><br><br>

        <label>Post Content:</label><br>
        <textarea name="post_content" rows="5" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>