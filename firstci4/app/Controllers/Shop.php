<?php namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        // Load the shop view
        return view('shop');
    }

    public function product($type, $productID)
    {
        // Load the product view with the given type
        echo '<h2>This is a product page for type: ' . $type . ' and product ID: ' . $productID . '</h2>';
        //return view('product');
    }

}