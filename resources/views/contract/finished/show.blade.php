@extends('layouts.admin')
@section('content')            
<div class="container">
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            

            <button class="btn btn-default"><a href="/contracts/ongoings" class="">Back</a></button>
            <form action="" method="">
                <fieldset disabled="disabled">
                        <div class="form-row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >To:</label>
                            <div class="col-sm-4">
                                <p>{{$onGoingContracts->to}}</p>
                            </div>
                            
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >Date:</label>
                            <div class="col-sm-4">
                                <p>{{$onGoingContracts->date}}</p>
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >Address:</label>
                            <div class="col-sm-4">
                                <p>{{$onGoingContracts->address}}</p>
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Reference:</label>
                            <div class="col-sm-4">
                                <p>{{$onGoingContracts->reference}}</p>
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Attention:</label>
                            <div class="col-sm-4">
                                <p>{{$onGoingContracts->attention}}</p>
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Area:</label>
                            <div class="col-sm-4">
                                <p>{{$onGoingContracts->area}}</p>
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right ">Project:</label>
                            <div class="col-sm-4 ">
                                <p>{{$onGoingContracts->project}}</p>
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Salesman:</label>
                            <div class="col-sm-4">
                                <p>{{$onGoingContracts->salesman}}</p>
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Location:</label>
                            <div class="col-sm-4">
                            <p>{{$onGoingContracts->location}}</p>
                            </div>
                            @csrf
                        </div>
                        
                </fieldset>
                    </form> 
                    </div>
                    
        </div>
    </div>
</div>
@endsection