<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Sex;
use App\Models\Category;
use App\Models\Products;
use App\Models\Subcategory;

class ProductsController extends Controller{
    
    public function index($sex){
        $products = Product::getProductsBySex($sex);
        $sex = Sex::getSexByUrl($sex);
        $titlePage = $sex->libelle;
        return view('client.products.show-products', compact('titlePage', 'products', 'sex'));
    }

    public function category($sex, $category){
        $products = Product::getProductsByCategory($sex, $category);
        $sex = Sex::getSexByUrl($sex);
        $category = Category::getCategoryByUrl($category);
        $titlePage = $category->libelle;
        return view('client.products.show-products', compact('titlePage', 'products', 'sex', 'category'));
    }

    public function subcategory($sex, $category, $subcategory){
        $products = Product::getProductsBySubcategory($sex, $subcategory);
        $sex = Sex::getSexByUrl($sex);
        $category = Category::getCategoryByUrl($category);
        $subcategory = Subcategory::getSubcategoryByUrl($subcategory);
        $titlePage = $subcategory->libelle;
        return view('client.products.show-products', compact('titlePage', 'products', 'sex', 'category', 'subcategory'));
    }

    public function product($sex, $category, $subcategory, $id){
        $product = Product::getProductById($id);
        $sizes = Product::getProductsSize($id);
        $colors = Product::getProductsColorsImages($id);
        $titlePage = $product->produit_libelle;
        return view('client.products.show-product', compact('titlePage', 'product', 'sizes', 'colors'));
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