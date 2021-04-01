<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaravelGoogleGraph extends Controller
{
    function index()
    {
     $data = DB::table('contracts')
       ->select(
        DB::raw('status as status'),
        DB::raw('count(*) as number'))
       ->groupBy('status')
       ->get();
     $array[] = ['Status', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->status, $value->number];
     }
     return view('sales.index')->with('status', json_encode($array));
    }
}

