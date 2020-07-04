<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function create() {
        return view('jawaban.form');
    }

    public function store(Request $request) {
        $baru_jawaban = jawaban::save($request->all()); 

        return redirect('/jawaban');
    }

    public function index(){
        $jawabanku = jawaban::get_all();
        return view('jawaban.index', compact('jawabanku'));
    }

    public function show() {
        $jawabans = jawaban::find_by_id($id);

        return view('jawaban.show', compact($jawabans))
    }
}
