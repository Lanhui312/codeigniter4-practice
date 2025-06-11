//This action URL location must match the route defined in Routes.php
//It will run into error if the action URL is not correct
<form action = "/firstci4/public/admin/blog/create" method = "post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <br>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Blog Post</button>
</form>