<?php namespace App\Controllers;


use App\Controllers\Admin\Shop as AdminShop;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    function validation() {
        $shop = new Shop();
        echo $shop->product('laptop', 'Asus'). '<br>'; 

$adminShop = new AdminShop();
echo $adminShop->product('laptop', 'Asus');
    }


    function show404(){
        echo 'this is a 404 page';
    }
}
