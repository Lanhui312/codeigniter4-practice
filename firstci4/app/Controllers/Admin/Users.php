<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;

/**
 * Users controller for the Admin section
 */
class Users extends BaseController
{
    public function index()
    {
        // Load the users view
        // return view('admin/users');

        echo '<h2>This is the users page</h2>';
    }

    public function getAllUser()
    {
        // Load the view to get all users
        echo '<h2>This is the get all users page</h2>';
        //return view('admin/get_all_users');
    }

}