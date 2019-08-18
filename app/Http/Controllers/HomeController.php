<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $links = config('links')['all'];

        // all artists
        $artists = Artist::where('enabled', "!=", false)
            ->orderBy('name', 'asc')
            ->get();
        return View('home', compact('artists', 'links'));
    }

    public function partner() {
        $partners = config('partners');
        return View('landingpages.partner', compact('partners'));
    }

    public function impressum() {
        return View('landingpages.impressum');
    }

    public function datenschutz() {
        return View('landingpages.datenschutz');
    }

    public function videos() {
        $videos = config('videos');
        return View('landingpages.videos', compact('videos'));
    }

    public function logout() {
        Auth::logout();
        Session::flush();
        return Redirect::route('login')->with('message', 'Sie wurden ausgeloggt.');
    }
}
