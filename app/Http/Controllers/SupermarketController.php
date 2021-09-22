<?php

namespace App\Http\Controllers;

use App\Models\Supermarket;
use Illuminate\Http\Request;

class SupermarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Supermarket::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supermarket = Supermarket::create($request->all());

        return response()->json($supermarket);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function show(Supermarket $supermarket)
    {
        return response()->json($supermarket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supermarket $supermarket)
    {
        $supermarket->update($request->all());

        return response()->json($supermarket);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supermarket $supermarket)
    {
        $supermarket->delete();

        return response()->json($supermarket);
    }
}
