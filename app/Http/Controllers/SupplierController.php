<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $suppliers = \App\Supplier::all(); 
        return view('supplier.index', compact('suppliers'));
    }
    public function create(){
        return view('supplier.create');
    }
    public function store(){
        $data = request()->validate([
            'company' => 'required',
            'phone' => 'required|numeric|digits:11',
            'first_name' => 'required|alpha|regex:/^[a-zA-Z]*$/',
            'last_name' => 'required|alpha|regex:/^[a-zA-Z]*$/',
            'email' => 'required|email',
            'city'  => 'required|alpha|regex:/^[a-zA-Z]*$/',
            'province' => 'required|alpha|regex:/^[a-zA-Z]*$/'
        ]);
        \App\Supplier::create($data);
        return redirect('/suppliers');
    }
}
