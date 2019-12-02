<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use App\Presentacion;

class DashboardController extends Controller
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

    public function home(){

   		$presentaciones = Presentacion::find(1);
        return view('home', compact('presentaciones'));
    }
}
