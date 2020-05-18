<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stock;
use App\Requisition;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){

        $analytics = [
            'stocks' => count(DB::select('select * from stocks where availableQuantity > minimumUnit')),
            'requisitions' => Requisition::all()->count(),
            'finishedStcoks' => count(DB::select('select * from stocks where availableQuantity < 1  ')),
            'pendingApproval' => count(DB::select('select * from stocks where 
            availableQuantity <= minimumUnit 
            &&
            item NOT IN (SELECT item FROM requisitions)
            ')),
        ];

        return view('index')->with([
            'title' => 'Dashboard',
            'summary' => $analytics
        ]);
    }
}
