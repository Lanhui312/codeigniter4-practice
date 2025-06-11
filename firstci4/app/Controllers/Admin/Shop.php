<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;

/**
 * Shop controller for the Admin section
 */
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
        echo '<h2>This is an admin product page for type: ' . $type . ' and product ID: ' . $productID . '</h2>';
        //return view('product');
    }

}