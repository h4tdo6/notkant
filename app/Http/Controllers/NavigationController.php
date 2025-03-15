<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home() {
        return view('navigation.home');
    }

    public function search() {
        return view('navigation.search');
    }

    public function explore() {
        return view('navigation.explore');
    }

    public function messages() {
        return view('navigation.messages');
    }

    public function notifications() {
        return view('navigation.notifications');
    }

    public function members() {
        return view('navigation.members');
    }

    public function references() {
        return view('navigation.references');
    }
}
