<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeedBack;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $feed_backs_count = FeedBack::all()->count();
        $orders_count = Order::all()->count();
        $users_count = User::all()->count();

        return view('admin.home.index', [
            'feed_backs_count' => $feed_backs_count,
            'orders_count' => $orders_count,
            'users_count' => $users_count
        ]);
    }
}
