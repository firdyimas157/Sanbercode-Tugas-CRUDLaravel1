<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class pertanyaan {
    public static function get_all() {
         $pertanyaan = DB::table('pertanyaan')->get();
         return $pertanyaan;
    }

    public static function save($dataper) {
        unset($data["_token"]);
        $new_pertanyaan = DB::table('pertanyaan')->insert($dataper);
        return $new_pertanyaan;
    }
}