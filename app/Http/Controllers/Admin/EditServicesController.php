<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages\ServicePage;
use Illuminate\Http\Request;

class EditServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = ServicePage::find(1);

        return view('admin.edit-pages.services', [
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
     * @param  \App\Models\Pages\ServicePage  $servicePage
     * @return \Illuminate\Http\Response
     */
    public function show(ServicePage $servicePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages\ServicePage  $servicePage
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicePage $servicePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages\ServicePage  $servicePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicePage $servicePage)
    {
        $servicePage = ServicePage::find(1);
    
        $servicePage->mainTitle = $request->mainTitle;
        $servicePage->mainDesc = $request->mainDesc;

        $servicePage->save();

        return redirect()->back()->withSuccess('Данные успешно обновлены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages\ServicePage  $servicePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicePage $servicePage)
    {
        //
    }
}
