<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    protected $table = 'produit';

    public static function getProductsBySex($sex){
        return DB::table('produit')
            ->select('produit.id as id_produit', 'reference', 'produit.libelle as libelle_produit', 'description', 'prix')
            ->join('sexe', 'sexe.id', '=', 'produit.id_sexe')
            ->where('sexe.url', $sex)
            ->get();
    }

    public static function getProductsByCategory($sex, $category){
        return DB::table('produit')
            ->select('produit.id as id_produit', 'reference', 'produit.libelle as libelle_produit', 'description', 'prix')
            ->join('sexe', 'sexe.id', '=', 'produit.id_sexe')
            ->join('sous_categorie', 'sous_categorie.id', '=', 'produit.id_souscategorie')
            ->join('categorie', 'categorie.id', '=', 'sous_categorie.id_categorie')
            ->where('sexe.url', $sex)
            ->where('categorie.url', $category)
            ->get();
    }

    public static function getProductsBySubcategory($sex, $subcategory){
        return DB::table('produit')
            ->select('produit.id as id_produit', 'reference', 'produit.libelle as libelle_produit', 'description', 'prix')
            ->join('sexe', 'sexe.id', '=', 'produit.id_sexe')
            ->join('sous_categorie', 'sous_categorie.id', '=', 'produit.id_souscategorie')
            ->where('sexe.url', $sex)
            ->where('sous_categorie.url', $subcategory)
            ->get();
    }
}