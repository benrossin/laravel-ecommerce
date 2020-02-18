<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'categorie';

    public static function getCategoryByUrl($url){
        return DB::table('categorie')
            ->where('categorie.url', $url)
            ->first();
    }
}