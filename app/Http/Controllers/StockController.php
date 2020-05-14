<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){

        return view('stocks')->with(['title' => 'Dashboard']);

    }

    public function create(Request $request){

        return view('stocks-c')->with(['title' => 'New Stock']);
        
    }

    public function update(Request $request){

        return view('stocks-u')->with(['title' => 'Update Stock']);
        
    }

    public function delete(Request $request){

        //delete stock

        //redirect back
    }
}
