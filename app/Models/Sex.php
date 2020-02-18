<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sex extends Model
{
    protected $table = 'sexe';

    public static function getSexByUrl($url){
        return DB::table('sexe')
            ->where('sexe.url', $url)
            ->first();
    }
}