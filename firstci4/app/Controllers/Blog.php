<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data  = [
            'meta_title' => 'Blog Home',
            'title'      => 'CI4 Blog',
            'description' => 'Welcome to the CodeIgniter 4 blog. Here you can find various posts and articles.',
        ];

        $posts = ['Title 1', 'Title 2', 'Title 3'];
        $data['posts'] = $posts;
        echo view('templates/header', $data);
        echo view('blog');
        echo view('templates/footer');
    }

    public function post()
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
