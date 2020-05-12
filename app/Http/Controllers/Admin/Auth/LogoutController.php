<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        if (auth('admin')->check()) {
            auth("admin")->logout();
        }
        return redirect()->route('admin.auth.login');
    }
}
