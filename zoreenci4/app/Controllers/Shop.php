<?php namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }
    public function product($type = 'laptop ', $product_id = 'ROG '){
        echo '<h2> this is a product:  '  .$type. ' with an id:' .$product_id. '</h2>';
       // return view('product');
    }
}
