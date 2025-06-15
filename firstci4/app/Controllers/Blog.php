<?php

namespace App\Controllers;

use App\Models\BlogModel;

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

        return view('blog', $data);
    }

    public function post()
    {
        $data  = [
            'meta_title' => 'Post Creation',
            'title'      => 'Single Blog Post',
        ];
        return view('single_post', $data);
    }

    public function new()
    {
        $data  = [
            'meta_title' => 'Create New Post',
            'title'      => 'Create New Blog Post',
        ];

        if ($this->request->getMethod() === 'post') {
            $model = new BlogModel();
            $model->save([
                'post_title'   => $this->request->getPost('post_title'),
                'post_content' => $this->request->getPost('post_content'),
            ]);
        }
        return view('new_post', $data);
    }
}
