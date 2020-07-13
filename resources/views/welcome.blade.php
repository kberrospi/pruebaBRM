@extends('layout')

@section('content')
   
            <div class="row justify-content-center align-items-center vh-100" style="padding: 12px">
                <div class=" d-flex flex-column w-50 bg-white rounded shadow p-3" style=""> 
                    <div class="col text-center p-2" style="">
                         <a class="btn btn-outline-success w-50"  href="http://localhost:8000/products/create">Add products</a>
                    </div>
                    <div class="col text-center p-2" >
                         <a class="btn btn-outline-primary w-50"  href="http://localhost:8000/items/index">Buy products</a>
                    </div>
                    <div class="col text-center p-2" >
                        <a class="btn btn-outline-info w-50"  href="http://localhost:8000/products">View products</a>
                    </div>
                </div>
               
                
            </div>
    

@stop