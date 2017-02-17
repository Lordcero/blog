<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    //
    public function index()
{
    
    return view('calc');
}
public function add(Request $request)
{

$result=$request->number1 +$request->number2;
return view('sum',['sum'=>$result]);
}
}
