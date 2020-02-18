<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subcategory extends Model
{
    protected $table = 'sous_categorie';

    public static function getSubcategoryByUrl($url){
        return DB::table('sous_categorie')
            ->where('sous_categorie.url', $url)
            ->first();
    }
}