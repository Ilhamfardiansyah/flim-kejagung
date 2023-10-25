<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Dashboard.index');
    }

    public function form_regis()
    {
        return view('Dashboard.form_regis');
    }

    public function form_list()
    {
        return view('Dashboard.form_list');
    }

    public function regist()
    {
        return view('Dashboard.regist');
    }

    public function coc()
    {
        return view('Dashboard.coc');
    }

}
