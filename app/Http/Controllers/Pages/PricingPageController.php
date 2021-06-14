<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\PricingPage;
use App\Models\Product;
use Illuminate\Http\Request;

class PricingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_main = Product::where('category', 'main')->get();
        $products_css = Product::where('category', 'css')->get();
        $pricingPage = PricingPage::all();

        return view('pricing.index', [
            'products_main' => $products_main,
            'products_css' => $products_css,
            'pricingPage' => $pricingPage
        ]);
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
     * @param  \App\Models\Pages\PricingPage  $pricingPage
     * @return \Illuminate\Http\Response
     */
    public function show(PricingPage $pricingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages\PricingPage  $pricingPage
     * @return \Illuminate\Http\Response
     */
    public function edit(PricingPage $pricingPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages\PricingPage  $pricingPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PricingPage $pricingPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages\PricingPage  $pricingPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PricingPage $pricingPage)
    {
        //
    }
}
