<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages\PricingPage;
use Illuminate\Http\Request;

class EditPricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = PricingPage::find(1);

        return view('admin.edit-pages.pricing', [
            'content' => $content
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
        $pricingPage = PricingPage::find(1);
    
        $pricingPage->mainTitle = $request->mainTitle;
        $pricingPage->mainDesc = $request->mainDesc;

        $pricingPage->save();

        return redirect()->back()->withSuccess('Данные успешно обновлены!');
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
