<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accordion;
use Illuminate\Http\Request;

class AccordionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accordions = Accordion::all();

        return view('admin.accordion.index', [
            'accordions' => $accordions
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
     * @param  \App\Models\Accordion  $accordion
     * @return \Illuminate\Http\Response
     */
    public function show(Accordion $accordion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accordion  $accordion
     * @return \Illuminate\Http\Response
     */
    public function edit(Accordion $accordion)
    {
        return view('admin.accordion.edit', [
            'accordion' => $accordion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accordion  $accordion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accordion $accordion)
    {
        $accordion->buttonImg = $request->buttonImg;
        $accordion->buttonDesc = $request->buttonDesc;
        $accordion->panelImg = $request->panelImg;
        $accordion->panelDesc = $request->panelDesc;
        $accordion->save();

        return redirect()->back()->withSuccess('Аккордеон успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accordion  $accordion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accordion $accordion)
    {
        //
    }
}
