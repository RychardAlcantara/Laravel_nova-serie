<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $series = Series::all();
           
        

        return view('series.index')->with('series', $series);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nomeSerie=$request->input('nome');
        $series = new Series();
        $series->nome = $nomeSerie;
        $series->save();

        
        return redirect ('/series');
        
            
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
