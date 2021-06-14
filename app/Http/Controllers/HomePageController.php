<?php

namespace App\Http\Controllers;

use App\Models\Accordion;
use App\Models\FeedBack;
use App\Models\Tool;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        $accordions = Accordion::all();
        $feedbacks = FeedBack::all()->sortBy('created_at')->sortDesc()->take(2);

        return view('home.index', [
            'tools' => $tools,
            'accordions' => $accordions,
            'feedbacks' => $feedbacks
        ]);
    }

}
