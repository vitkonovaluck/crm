<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }

    public function test_post(){
        return response()->json(['first-test' => 'ok']);
    }

    public function testPut(){
        return response()->json(['update' => 'ok']);
    }
}
