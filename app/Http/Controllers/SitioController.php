<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function index()
{
    return view('Sitio/blank');
}   

public function analisis (Request $request,$IdSistema)
{
    return view('Sitio/blank',['idSistema'=>$IdSistema]);
}    
}



