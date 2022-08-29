<?php

namespace App\Http\Controllers;

use App\Models\giftcard;
use Illuminate\Http\Request;

class GiftcardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.giftcard.careate');
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
     * @param  \App\Models\giftcard  $giftcard
     * @return \Illuminate\Http\Response
     */
    public function show(giftcard $giftcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\giftcard  $giftcard
     * @return \Illuminate\Http\Response
     */
    public function edit(giftcard $giftcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\giftcard  $giftcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, giftcard $giftcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\giftcard  $giftcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(giftcard $giftcard)
    {
        //
    }
}
