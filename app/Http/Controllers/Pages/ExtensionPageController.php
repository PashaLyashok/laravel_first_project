<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\ExtensionPage;
use App\Models\Extension;
use Illuminate\Http\Request;

class ExtensionPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extensions = Extension::all()->sortBy('created_at')->take(4);
        $extensionPage = ExtensionPage::all();

        return view('extension.index', [
            'extensions' => $extensions,
            'extensionPage' => $extensionPage
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
     * @param  \App\Models\Pages\ExtensionPage  $extensionPage
     * @return \Illuminate\Http\Response
     */
    public function show(ExtensionPage $extensionPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages\ExtensionPage  $extensionPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ExtensionPage $extensionPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages\ExtensionPage  $extensionPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtensionPage $extensionPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages\ExtensionPage  $extensionPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtensionPage $extensionPage)
    {
        //
    }
}
