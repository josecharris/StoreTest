<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function products(){
    	$products = Product::all();
    	return view("products", compact('products'));
    }

    public function cart(){
    	return view("cart");
    }

    public function addToCart($id){
    	$product = Product::all();
    	$cart = session()->get("cart");

    	if(!$cart){
    		$cart = [
    			$id => [
    				"name" => 'Producto',
    				"quantity" => 1,
    				"price" => '12.10',
    				"photo" => 'https://rockcontent.com/es/wp-content/uploads/sites/3/2019/02/o-que-e-produto-no-mix-de-marketing.png'
    			]
    		];
    		session()->put("cart", $cart);
    		return redirect()->back()->with('success', 'Producto agregado a la carta exitosamente.');
    	}

    	if(isset($cart[$id])){
    		$cart[$id]['quantity']++;
    		session()->put("cart", $cart);
    		return redirect()->back()->with('success', 'Producto agregado a la carta exitosamente.');
    	}

    	$cart[$id] = [
    		"name" => 'Producto',
    		"quantity" => 1,
    		"price" => '12.10',
    		"photo" => 'https://rockcontent.com/es/wp-content/uploads/sites/3/2019/02/o-que-e-produto-no-mix-de-marketing.png'
    	];
		session()->put("cart", $cart);
		return redirect()->back()->with('success', 'Producto agregado a la carta exitosamente.');

    }
}
