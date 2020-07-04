<?php

namespace App\Models;

class jawaban {
    public static function get_all() {
         $jawaban = DB::table('jawaban')->get();
         return $jawaban;
    }

    public static function save($dataja) {
        unset($data["_token"]);
        $new_jawaban = DB::table('jawaban')->insert($dataja);
        return $new_jawaban;
    }
}