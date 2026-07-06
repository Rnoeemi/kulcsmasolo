<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function kulcsmasolas()
    {
        return view('pages.kulcsmasolas');
    }

    public function cipojavitas()
    {
        return view('pages.cipojavitas');
    }

    public function egyebSzolgaltatasok()
    {
        return view('pages.egyeb-szolgaltatasok');
    }

    public function rolunk()
    {
        return view('pages.rolunk');
    }

    public function kapcsolat()
    {
        return view('pages.kapcsolat');
    }
}
