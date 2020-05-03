<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Measurement;
class MeasurementController extends Controller
{
    public function index(){
        $measurements = Measurement::paginate(20);
        return view('measurements.index', compact('measurements'));
    }

    public function create(){
        return view('measurements.create');
    }

    public function store(){
        $measure = Measurement::create ([

            'name' => request('name')
            ]);
       return back()->with('success');

    }
    public function edit(Measurement $measure){

        return view('measurements.edit', compact('measure'));

    }
    public function update(Request $request , Measurement $measures){
       $measure =     $measures->update($request->all());

//         return view('measurements.edit', compact('measure'));
            return redirect(route('measurements.index'));
    }
}
