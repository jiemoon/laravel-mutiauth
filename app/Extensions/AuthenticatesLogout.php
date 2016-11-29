<?php

namespace App\Extensions;

use Illuminate\Http\Request;

trait AuthenticatesLogout
{
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->forget(auth()->guard()->getName());

        $request->session()->regenerate();

        return redirect('/admin/login');
    }
}
