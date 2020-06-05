<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Services\UserService;
use App\Models\Order;

class AccountController extends Controller
{
    protected $userService;

    public function __construct (UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('web.user.account');
    }

    public function editProfile()
    {
        return view('web.user.profile.index');
    }

    public function updateProfile(UserFormRequest $request)
    {
        $this->userService->updateProfile($request);

        return redirect('/account')->with('success', 'Profile Updated');
    }

    public function myOrder()
    {
        $user_id = auth()->user()->id;
        $orders = Order::with('orders.product')->where('user_id', $user_id)->get();

        return view('web.user.order.index', compact('orders'));
    }
}
