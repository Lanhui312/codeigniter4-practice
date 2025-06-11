<?php namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        // Load the shop view
        return view('shop');
    }
}