<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index()
    {
        return view('editor.index');
    }

    public function store(Request $request)
    {
        var_dump($_POST);
    }
}
