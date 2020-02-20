<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'produit';

    public static function getProductById($id)
    {
        return DB::table('produit')
            ->select(
                'produit.id as produit_id',
                'produit.reference as produit_reference',
                'produit.libelle as produit_libelle',
                'produit.description as produit_description',
                'produit.prix as produit_prix',
                'remise.taux as remise_taux'
            )
            ->leftjoin('remise', 'remise.id', '=', 'produit.id_remise')
            ->where('produit.id', $id)
            ->first();
    }

    public static function getProductsByLibelle($search)
    {
        return DB::table('produit')
            ->select(
                'produit.id as produit_id',
                'produit.reference as produit_reference',
                'produit.libelle as produit_libelle',
                'produit.description as produit_description',
                'produit.prix as produit_prix',
                'remise.taux as remise_taux'
            )
            ->leftjoin('remise', 'remise.id', '=', 'produit.id_remise')
            ->where('produit.libelle', 'like', '%' . $search . '%')
            ->get();
    }

    public static function getProductsBySex($sex)
    {
        return DB::table('produit')
            ->select(
                'produit.id as produit_id',
                'produit.reference as produit_reference',
                'produit.libelle as produit_libelle',
                'produit.description as produit_description',
                'produit.prix as produit_prix',
                'sexe.id as sexe_id',
                'sexe.libelle as sexe_libelle',
                'sexe.url as sexe_url',
                'sous_categorie.id as souscategorie_id',
                'sous_categorie.libelle as souscategorie_libelle',
                'sous_categorie.url as souscategorie_url',
                'categorie.id as categorie_id',
                'categorie.libelle as categorie_libelle',
                'categorie.url as categorie_url',
                'remise.taux as remise_taux'
            )
            ->join('sexe', 'sexe.id', '=', 'produit.id_sexe')
            ->leftjoin('remise', 'remise.id', '=', 'produit.id_remise')
            ->join('sous_categorie', 'sous_categorie.id', '=', 'produit.id_souscategorie')
            ->join('categorie', 'categorie.id', '=', 'sous_categorie.id_categorie')
            ->where('sexe.url', $sex)
            ->get();
    }

    public static function getProductsByCategory($sex, $category)
    {
        return DB::table('produit')
            ->select(
                'produit.id as produit_id',
                'produit.reference as produit_reference',
                'produit.libelle as produit_libelle',
                'produit.description as produit_description',
                'produit.prix as produit_prix',
                'sexe.id as sexe_id',
                'sexe.libelle as sexe_libelle',
                'sexe.url as sexe_url',
                'sous_categorie.id as souscategorie_id',
                'sous_categorie.libelle as souscategorie_libelle',
                'sous_categorie.url as souscategorie_url',
                'categorie.id as categorie_id',
                'categorie.libelle as categorie_libelle',
                'categorie.url as categorie_url',
                'remise.taux as remise_taux'
            )
            ->join('sexe', 'sexe.id', '=', 'produit.id_sexe')
            ->leftjoin('remise', 'remise.id', '=', 'produit.id_remise')
            ->join('sous_categorie', 'sous_categorie.id', '=', 'produit.id_souscategorie')
            ->join('categorie', 'categorie.id', '=', 'sous_categorie.id_categorie')
            ->where('sexe.url', $sex)
            ->where('categorie.url', $category)
            ->get();
    }

    public static function getProductsBySubcategory($sex, $subcategory)
    {
        return DB::table('produit')
            ->select(
                'produit.id as produit_id',
                'produit.reference as produit_reference',
                'produit.libelle as produit_libelle',
                'produit.description as produit_description',
                'produit.prix as produit_prix',
                'sexe.id as sexe_id',
                'sexe.libelle as sexe_libelle',
                'sexe.url as sexe_url',
                'sous_categorie.id as souscategorie_id',
                'sous_categorie.libelle as souscategorie_libelle',
                'sous_categorie.url as souscategorie_url',
                'categorie.id as categorie_id',
                'categorie.libelle as categorie_libelle',
                'categorie.url as categorie_url',
                'remise.taux as remise_taux'
            )
            ->join('sexe', 'sexe.id', '=', 'produit.id_sexe')
            ->leftjoin('remise', 'remise.id', '=', 'produit.id_remise')
            ->join('sous_categorie', 'sous_categorie.id', '=', 'produit.id_souscategorie')
            ->join('categorie', 'categorie.id', '=', 'sous_categorie.id_categorie')
            ->where('sexe.url', $sex)
            ->where('sous_categorie.url', $subcategory)
            ->get();
    }

    public static function getProductsColorsImages($id)
    {
        return DB::table('produit')
            ->select(
                'couleur.id as couleur_id',
                'couleur.hexa as couleur_hexa',
                'couleur.libelle as couleur_libelle'
            )
            ->join('produit_couleur', 'produit.id', '=', 'produit_couleur.id_produit')
            ->join('couleur', 'couleur.id', '=', 'produit_couleur.id_couleur')
            ->where('produit.id', $id)
            ->get();
    }

    public static function getProductsSize($id)
    {
        return DB::table('produit')
            ->select('taille.id as taille_id', 'taille.libelle as taille_libelle', 'stock.quantite as stock_quantite')
            ->join('stock', 'stock.id_produit', '=', 'produit.id')
            ->join('taille', 'taille.id', '=', 'stock.id_taille')
            ->where('produit.id', $id)
            ->get();
    }
}
