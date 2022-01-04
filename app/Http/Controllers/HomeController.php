<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        SEOMeta::setTitle("Bienvenue dans mon cybergazon.");

        return view("home.index");
    }

    public function contact()
    {
        SEOMeta::setTitle("Entrons en contact");

        return view("home.contact");
    }
}
