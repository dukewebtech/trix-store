git<?php

namespace App\Http\Controllers;

use App\Measurement;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        $stocks = Stock::orderBy('created_at', 'desc')->get();
        return view('stocks.index',compact('stocks'));
    }

    public function create(){
        return view('stocks.create');
    }
    public function edit(Stock $stock){

        return view('stocks.update',compact('stock'));
    }


    public function store(){
        $newStock = Stock:: create([
            'item' => request('item'),
            'costPerUnit' => request('costPerUnit'),
            'availableQuantity' => request('availableQuantity'),
            'minimumUnit' => request('minimumUnit'),
            'measurementId' => request('measurementId'),
        ]);
        return back();
    }
    public function update(Request $request , Stock $stock){
        $measure =     $stock->update($request->all());

        return back();
    }
}
