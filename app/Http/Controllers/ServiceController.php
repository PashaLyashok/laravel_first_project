<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function getService($alias)
    {
        $service = Service::where('alias', $alias)->first();

        return view('services.service.page',[
            'service' => $service
        ]);
    }
}
