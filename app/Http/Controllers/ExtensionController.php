<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extension;

class ExtensionController extends Controller
{
    public function getExtension($alias)
    {
        $extension = Extension::where('alias', $alias)->first();

        return view('extension.ext.page',[
            'extension' => $extension
        ]);
        //
    }
}
