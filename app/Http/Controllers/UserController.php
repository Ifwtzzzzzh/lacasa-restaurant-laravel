<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard() {
        return view('user.dashboard');
    }

    public function home() {
        return view('public.welcome');
    }

    public function index() {
        return view('layouts.base');
    }

    public function reservation() {
        return view('public.reservation');
    }

    public function restaurant() {
        return view('public.restaurant');
    }
}