<?php namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data  = [
            'meta_title' => 'Blog Home',
            'title'      => 'This is a Blog Title',
        ];

        $posts = ['Title 1', 'Title 2', 'Title 3'];
        $data['posts'] = $posts;
        echo view('templates/header', $data);
        echo view('blog');
        echo view('templates/footer');
    }

    public function create()
    {
        $data  = [
            'meta_title' => 'Post Creation',
            'title'      => 'Single Blog Post',
        ];
        echo view('templates/header', $data);
        echo view('single_post');
        echo view('templates/footer');
    }

    public function save()
    {
        // Here you would typically handle form submission and save the blog post.
        // For now, we'll just return a success message.
        return '<h2>Blog post created successfully!</h2>';
    }
}