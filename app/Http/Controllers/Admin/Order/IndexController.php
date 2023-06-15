<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class IndexController extends Controller
{
    public function __invoke()
    {
        $orders = Order::paginate(20);
        return view('admin.order.index', $orders);
    }
}
