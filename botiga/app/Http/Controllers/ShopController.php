<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Country;
use App\Shop;

class ShopController extends Controller
{
    public function index(){
        $shops = Shop::orderBy('name')->get();
        return view('shops.index')->with('shops',$shops);
    }

    public function create(){
        $countries = Country::get();
        return view('shops.create')->with('countries',$countries);
    }

    public function store(){
        $name = $_POST["name"];
        $address = $_POST["address"];
        $country_id = $_POST["country"];

        $shop = new Shop;
        $shop->name = $name;
        $shop->address = $adress;
        $shop->country_id = $country_id;
    }
}
