<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        $stocks = Stock::paginate(20);
        return view('stocks.index',compact('stocks'));
    }

    public function create(){
        return view('stocks.create');
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
}
