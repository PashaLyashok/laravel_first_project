<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages\ContactPage;
use Illuminate\Http\Request;

class EditContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = ContactPage::find(1);

        return view('admin.edit-pages.contacts', [
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
     * @param  \App\Models\Pages\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function show(ContactPage $contactPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pages\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPage $contactPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pages\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactPage $contactPage)
    {
        $contactPage = ContactPage::find(1);
    
        $contactPage->mainTitle = $request->mainTitle;
        $contactPage->mainDesc = $request->mainDesc;

        $contactPage->save();

        return redirect()->back()->withSuccess('Данные успешно обновлены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pages\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactPage $contactPage)
    {
        //
    }
}
