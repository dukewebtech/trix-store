<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stock;
use App\Requisition;

class RequisitionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $stocks = DB::select('select * from stocks where availableQuantity <= minimumUnit');

        return view('requests')->with([
            'title' => 'Requisitions',
            'requisition' => $stocks
        ]);
    }
}
