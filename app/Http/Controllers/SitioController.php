<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function index()
{
    return 'Proyecto de calidad del aire';
}   

public function analisis (Request $request,$IdSistema)
{
    return $IdSistema;
}    
}



