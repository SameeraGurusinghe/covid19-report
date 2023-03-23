<?php

namespace App\Http\Controllers;
use App\Models\CovidData;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard after user successfully logged in.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $covid19Data = CovidData::orderBy('date', 'desc')->get();
        return view('welcome', ['covid19Data' => $covid19Data]);
    }
}