@extends('layout')

@section('content')
            
            <div class="row justify-content-center align-items-center vh-100" style="padding: 12px">
            
                <div class=" d-flex flex-column w-50 bg-white rounded shadow p-3" style=""> 
                
                    <div class="col-flex text-center">
                        <h1 style=" font-weight: bold; height: 100px;">Buy Products</h1>
                    </div>
                     <div class="col-flex text-center p-2">
                        <a class="btn btn-outline-dark btn-block" href="/items/create" >Add invoices</a>
                    </div>
                   
                    
                    <div class="list-group p-2">
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                    </div>
                </div>
               
            </div>
    

@stop