<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Sex;
use App\Models\Category;
use App\Models\Subcategory;

class ProductsController extends Controller{
    
    public function index($sex){
        $titlePage = $sex;
        $products = Products::getProductsBySex($sex);
        $sex = Sex::getSexByUrl($sex);
        return view('client.products.show-products', compact('titlePage', 'products', 'sex'));
    }

    public function category($sex, $category){
        $titlePage = $category;
        $products = Products::getProductsByCategory($sex, $category);
        $sex = Sex::getSexByUrl($sex);
        $category = Category::getCategoryByUrl($category);
        return view('client.products.show-products', compact('titlePage', 'products', 'sex', 'category'));
    }

    public function subcategory($sex, $category, $subcategory){
        $titlePage = $subcategory;
        $products = Products::getProductsBySubcategory($sex, $subcategory);
        $sex = Sex::getSexByUrl($sex);
        $category = Category::getCategoryByUrl($category);
        $subcategory = Subcategory::getSubcategoryByUrl($subcategory);
        return view('client.products.show-products', compact('titlePage', 'products', 'sex', 'category', 'subcategory'));
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