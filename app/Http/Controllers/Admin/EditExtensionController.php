<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages\ExtensionPage;
use Illuminate\Http\Request;

class EditExtensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = ExtensionPage::find(1);

        return view('admin.edit-pages.extensions', [
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
        $servicePage = ExtensionPage::find(1);
    
        $servicePage->mainTitle = $request->mainTitle;
        $servicePage->mainDesc = $request->mainDesc;

        $servicePage->save();

        return redirect()->back()->withSuccess('Данные успешно обновлены!');
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
