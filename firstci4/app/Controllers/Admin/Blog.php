<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;

/**
 * Blog controller for the Admin section
 */
class Blog extends BaseController
{
    public function index()
    {
        // Load the blog view
        //return view('admin/blog');
        echo '<h2>This is the blog page</h2>';
    }

    public function create()
    {
        // Load the create blog post view
        return view('admin/create_blog');
    }

    public function save()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }

}