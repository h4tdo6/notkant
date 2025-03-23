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

    public function blankMessage() {
        return view('direct.blank');
    }

    public function aquinasMessage() {
        return view('direct.aquinas');
    }

    public function aristotleMessage() {
        return view('direct.aristotle');
    }

    public function blankRequest() {
        return view('requests.blank');
    }

    public function platoRequest() {
        return view('requests.plato');
    }

    public function socratesRequest() {
        return view('requests.socrates');
    }

    public function members() {
        return view('navigation.members');
    }

    public function references() {
        return view('navigation.references');
    }
}
