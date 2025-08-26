<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeleteAccount extends Controller
{
    public function __invoke(Request $request)
    {
        Auth::user()->delete();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('register')->with('status', 'Your account has been successfully deleted.');
    }
}
