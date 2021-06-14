<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\ServicePage;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesPage = ServicePage::all();
        $services = Service::all();

        return view('services.index', [
            'servicesPage' => $servicesPage,
            'services' =>$services 
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
        //
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
