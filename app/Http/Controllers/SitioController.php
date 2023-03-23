<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function index()
{
    return view('Sitio/AllSistems');
}   

public function analisis (Request $request,$IdSistema)
{
    return view('Sitio/OneSistem',['idSistema'=>$IdSistema]);
}    
}



