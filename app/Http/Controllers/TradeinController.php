<?php

namespace App\Http\Controllers;

use App\Models\Tradein;
use Illuminate\Http\Request;

class TradeinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tradein::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tradein  $tradein
     * @return \Illuminate\Http\Response
     */
    public function show(Tradein $tradein)
    {
        return view('show', compact('tradein'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tradein  $tradein
     * @return \Illuminate\Http\Response
     */
    public function edit(Tradein $tradein)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tradein  $tradein
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tradein $tradein)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tradein  $tradein
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tradein $tradein)
    {
        //
    }
}
