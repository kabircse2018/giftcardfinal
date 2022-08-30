<?php

namespace App\Http\Controllers;

use App\Models\giftcard;
use App\Models\outlet;
use Illuminate\Http\Request;
use Auth;

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
        $outlets = outlet::all();
        return view('backend.giftcard.careate', compact('outlets'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'invoice_no' => 'required|unique:giftcards',
        ]);

        $giftcards = new giftcard;
        $giftcards->user_id = Auth::user()->id;
        $giftcards->outlet_id = $request->outlet_id;
        $giftcards->invoice_no = $request->invoice_no;
        $giftcards->unique_invoice_no = $request->unique_invoice_no;
        $giftcards->order_date = $request->order_date;
        $giftcards->order_id = $request->order_id;
        $giftcards->customer_name = $request->customer_name;
        $giftcards->customer_contact = $request->customer_contact;
        $giftcards->order_qty = $request->order_qty;
        $giftcards->validity_month = $request->validity_month;
        $giftcards->order_price = $request->order_price;
        $giftcards->actual_price = $request->actual_price;
        $giftcards->customer_address = $request->customer_address;
        $giftcards->save();

        return redirect()->back();
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
