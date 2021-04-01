<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class ContractController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //contract.create
    public function create(){
        return view('contract.create');
    }
    public function store(Request $request){
        $currentStatus = 'pending';

        $data = $request->validate([
            'to' => 'required',
            'date' => 'date',
            'address' => 'required',
            'reference' => 'required',
            'attention' => 'required',
            'area' => 'required',
            'project' => 'required',
            'salesman' => 'required',
            'location' => 'required',
            'titleA' => 'nullable|string',
            'quantity1' => 'nullable|numeric',
            'unit1' => 'nullable|string',
            'dimension1' => 'nullable|string',
            'price1' => 'nullable|numeric',
            'total1' => 'nullable',
            'quantity2' => 'nullable|numeric',
            'unit2' => 'nullable|string',
            'dimension2' => 'nullable|string',
            'price2'=> 'nullable|numeric',
            'total2'=> 'nullable',
            'quantity3' => 'nullable|numeric',
            'unit3' => 'nullable|string',
            'dimension3' => 'nullable|string',
            'price3' => 'nullable|numeric',
            'total3' => 'nullable',
            'quantity4' => 'nullable|numeric',
            'unit4' => 'nullable|string',
            'dimension4' => 'nullable|string',
            'price4' => 'nullable|numeric',
            'total4' => 'nullable',
            'quantity5' => 'nullable|numeric',
            'unit5' => 'nullable|string',
            'dimension5' => 'nullable|string',
            'price5' => 'nullable|numeric',
            'total5' => 'nullable',
            'list' => 'nullable',
            'disc' => 'nullable|numeric',
            'sale' => 'nullable',
            'quantity6' => 'nullable|numeric',
            'unit6' => 'nullable|string',
            'price6' => 'nullable|numeric',
            'total6' => 'nullable|numeric',
            'quantity7' => 'nullable|numeric',
            'unit7' => 'nullable|string',
            'price7' => 'nullable|numeric',
            'total7' => 'nullable|numeric',
            'quantity8' => 'nullable|numeric',
            'unit8' => 'nullable|string',
            'price8' => 'nullable|numeric',
            'total8' => 'nullable|numeric',
            'quantity9' => 'nullable|numeric',
            'unit9' => 'nullable|string',
            'price9' => 'nullable|numeric',
            'total9' => 'nullable|numeric',
            'quantity10' => 'nullable|numeric',
            'unit10' => 'nullable|string',
            'price10' => 'nullable|numeric',
            'total10' => 'nullable|numeric',     
            'list1' => 'nullable|numeric',
            'del' => 'nullable|numeric',
            'list2' => 'nullable|numeric'
            
            
        ]);
        \App\Contract::create($data + ['status' => $currentStatus]);
        return redirect('contracts/pendings');
    }

    //contract.pending
    public function indexP(){
        $pendingContracts = \App\Contract::all()->where('status', '=', 'pending');
        return view('contract.pending.index', compact('pendingContracts'));   
        
    }
    public function showP(\App\Contract $pendingContract){
        return view('contract.pending.approve', compact('pendingContract'));
    }
    public function approveP(\App\Contract $pendingContract){
        $data = [];
        $data['status'] = 'ongoing';
        $pendingContract->update($data);
        return redirect('/contracts/pendings');
    }

     public function edit(\App\Contract $pendingContract){
        return view('contract.pending.edit', compact('pendingContract'));
    }
    public function update(\App\Contract $pendingContract){
        $data = request()->validate([
            'to' => 'required|string',
            'date' => 'date',
            'address' => 'required',
            'reference' => 'required',
            'attention' => 'required',
            'area' => 'required',
            'project' => 'required',
            'salesman' => 'required|string',
            'location' => 'required',

           
        ]);
        $pendingContract->update($data);
        return redirect('/contracts/pendings');
    }
    //contracts.ongoings
    public function indexOG(){
        $onGoingContracts = \App\Contract::all()->where('status', '=', 'ongoing');
        return view('contract.ongoing.index', compact('onGoingContracts'));    
    }

    public function showOG(\App\Contract $onGoingContracts){
        return view('contract.ongoing.show', compact('onGoingContracts'));
    }

    public function finishedOG(\App\Contract $onGoingContracts){
            $data = [];
            $data['status'] = 'finished';
            $onGoingContracts->update($data);
            return redirect('/contracts/ongoings');
        
    }

        //contracts.finished
        public function indexF(){
            $finishedContracts = \App\Contract::all()->where('status', '=', 'finished');
            return view('contract.finished.index', compact('finishedContracts'));    
        }

        
}
