<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Redirect;
use Auth;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTime;
use DatePeriod;
use DateInterval;
use Hash;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // dd('entro');

        if (Auth::check()) {
            if (Auth::User()->tipo_user == 'Proveedor') {
                return Redirect::to('distribuidor/index');
            }

            if (Auth::User()->tipo_user == 'Administrador') {
                return view('home');
            }
            
        }
    }
}
