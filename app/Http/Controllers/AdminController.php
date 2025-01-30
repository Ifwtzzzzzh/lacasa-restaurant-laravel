<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function home() {
        return view('layouts.base');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $url = '';
        if ($request->user()->role == 'admin') {
            $url = 'admin/dashboard';
        } elseif ($request->user()->role == 'user') {
            $url = 'user/dashboard';
        } else {
            $url = 'dashboard';
        }

        return redirect()->intended($url);
    }
}