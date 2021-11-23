<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientSiteController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function help()
    {
        return view('client.help');
    }
    public function deals()
    {
        return view('client.deals');
    }
    public function articles()
    {
        return view('client.articles');
    }
    public function organisations()
    {
        return view('client.organisations');
    }
    public function about()
    {
        return view('client.about');
    }

    public function vacancy()
    {
        return view('client.vacancy');
    }

    public function smi()
    {
        return view('client.smi');
    }
}
