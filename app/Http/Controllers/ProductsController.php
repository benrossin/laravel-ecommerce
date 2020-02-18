<?php

namespace App\Http\Controllers;
use App\Models\Products;

class ProductsController extends Controller{
    
    public function index($sex){
        $titlePage = $sex;
        $products = Products::getProductsBySex($sex);
        $sex = ['sex_url' => $sex, 'sex_libelle' => $products[0]->sexe_libelle];
        return view('client.products.show-products', compact('titlePage', 'products', 'sex'));
    }

    public function category($sex, $category){
        $titlePage = $category;
        $products = Products::getProductsByCategory($sex, $category);
        $sex = ['sex_url' => $sex, 'sex_libelle' => $products[0]->sexe_libelle];
        $category = ['category_url' => $category, 'category_libelle' => $products[0]->categorie_libelle];
        return view('client.products.show-products', compact('titlePage', 'products', 'sex', 'category'));
    }

    public function subcategory($sex, $category, $subcategory){
        $titlePage = $subcategory;
        $products = Products::getProductsBySubcategory($sex, $subcategory);
        $sex = ['sex_url' => $sex, 'sex_libelle' => $products[0]->sexe_libelle];
        $category = ['category_url' => $category, 'category_libelle' => $products[0]->categorie_libelle];
        $subcategory = ['subcategory_url' => $subcategory, 'subcategory_libelle' => $products[0]->souscategorie_libelle];
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