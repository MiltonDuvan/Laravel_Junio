<?php

namespace App\Http\Controllers;

use App\Models\promotions;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = promotions::simplePaginate(2);
        return view('Promotion.index',compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Promotion.promotion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $promotions= new promotions;
        $promotions->nombre=$request->nombre;
        $promotions->descripcion=$request->descripcion;
        $promotions->precio=$request->precio;
        $promotions->save();
        return redirect()->route('promotion.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function show(promotions $promotions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function edit(promotions $promotions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, promotions $promotions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function destroy(promotions $promotions)
    {
        //
    }
}
