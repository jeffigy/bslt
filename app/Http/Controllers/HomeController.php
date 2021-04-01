<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contract;
use \App\Sale;

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
        $contracts = \App\Contract::all();
        $countPending = $contracts->where('status', 'pending');
        $countOnGoing = $contracts->where('status', 'ongoing');
        $countFinished = $contracts->where('status', 'finished');
        $finishedContracts = \App\Contract::all()->where('status', '=', 'finished');
        return view('home', compact('countPending', 'countOnGoing', 'countFinished', 'finishedContracts'));;
    }
    

}
