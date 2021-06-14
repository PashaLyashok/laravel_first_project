<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages\HomePage;
use Illuminate\Http\Request;

class EditHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = HomePage::find(1);

        return view('admin.edit-pages.home', [
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
     * @param  \App\Models\Pages\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function show(HomePage $homePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePage $homePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePage $homePage)
    {
        $homePage = HomePage::find(1);
    
        $homePage->firstSectionTitle = $request->firstSectionTitle;
        $homePage->firstSectionDesc = $request->firstSectionDesc;
        $homePage->bannerVideoLink = $request->bannerVideoLink;
        $homePage->bannerButtonDesc = $request->bannerButtonDesc;

        $homePage->secondSectionMaxTitle = $request->secondSectionMaxTitle;
        $homePage->secondSectionMinTitle = $request->secondSectionMinTitle;
        $homePage->secondSectionDesc = $request->secondSectionDesc;
        $homePage->secondSectionButtonDesc = $request->secondSectionButtonDesc;

        $homePage->thirdSectionMaxTitle = $request->thirdSectionMaxTitle;
        $homePage->thirdSectionMinTitle = $request->thirdSectionMinTitle;

        $homePage->lastSectionTitle = $request->lastSectionTitle;
        $homePage->lastSectionDesc = $request->lastSectionDesc;
        $homePage->lastSectionButtonDesc = $request->lastSectionButtonDesc;

        $homePage->save();

        return redirect()->back()->withSuccess('Данные успешно обновлены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}
