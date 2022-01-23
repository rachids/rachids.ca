<?php

namespace App\Http\Controllers;

use App\Services\Youtube\YoutubeService;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        SEOMeta::setTitle("Laravel Web Artisan");

        $latestVideo = Cache::remember('last-uploaded-video', 60 * 60 * 24 * 3, static function () {
            return (new YoutubeService())->getLatestVideo();
        });

        return view("home.index", [
            'latestVideo' =>  $latestVideo,
        ]);
    }

    public function about()
    {
        SEOMeta::setTitle("Qui suis-je");

        return view("home.about");
    }
}
