<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    private $titlePage = 'Home';
    
    public function index(){
        $titlePage = $this->titlePage;
        return view('client.home', compact('titlePage'));
    }
}