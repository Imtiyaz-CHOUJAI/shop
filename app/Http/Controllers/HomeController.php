<?php

namespace App\Http\Controllers;

use App\Shop;
use App\User;
use JavaScript;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::with(['likes'])->orderBy('distance', 'ASC')->get();

        JavaScript::put([
            'shops' => $shops,
            'user' => \Auth::user(),
        ]);

        return view('home');
    }
}
