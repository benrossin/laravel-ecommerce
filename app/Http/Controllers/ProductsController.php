<?php

namespace App\Http\Controllers;
use App\Models\Products;

class ProductsController extends Controller{
    
    public function index($sex){
        $titlePage = $sex;
        $products = Products::getProductsBySex($sex);
        return view('client.products.show-products', compact('titlePage', 'products'));
    }

    public function category($sex, $category){
        $titlePage = 'Catégorie';
        $products = Products::getProductsByCategory($sex, $category);
        return view('client.products.show-products', compact('titlePage', 'products'));
    }

    public function subcategory($sex, $category, $subcategory){
        $titlePage = 'Sous catégorie';
        $products = Products::getProductsBySubcategory($sex, $subcategory);
        return view('client.products.show-products', compact('titlePage', 'products'));
    }

    /*public function promo(){
        $titlePage = 'Promotions';
        //$products = ;
        return view('client.products.show-products', compact('titlePage', 'products'));
    }

    public function news(){
        $titlePage = 'Nouveautés';
        //$products = ;
        return view('client.products.show-products', compact('titlePage', 'products'));
    }*/
}