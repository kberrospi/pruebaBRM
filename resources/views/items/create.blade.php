@extends('layout')

@section('content')
            
            <div class="row justify-content-center align-items-center vh-100" style=" padding: 12px">
               

                <div class=" d-flex flex-column w-50 bg-white rounded shadow p-3" style=""> 
                    <div class="text-center">
                        <h1 style="font-weight: bold; padding: 10px"> Buy Products</h1>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Product Code</th>
                                <th scope="col">Name</th>
                                <th scope="col">Lot Number</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td name="{{ 'id'.$product->cod_prod }}" >{{ $product->cod_prod }}</td>
                                    <td >{{ $product->name }}</td>
                                    <td >{{ $product->lot_number }}</td>
                                    <td >{{ $product->existence }}</td>
                                    <td >{{ $product->price }}</td>
                                    <td >{{ $product->expiration_date }}</td>
                                    <td> 
                                        <a class="btn btn-outline-success" href="{{ route('addProductItem', $product->id) }}">Add</a>
                                    </td>
                                    </div>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <h1 style="font-weight: bold; padding: 10px"> List Products</h1>
                    </div>
                    @if($items !== null)
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Product Code</th>
                                <th scope="col">Name</th>
                                <th scope="col">Lot Number</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->cod_prod }}</td>
                                    <td >{{ $item->name }}</td>
                                    <td >{{ $item->lot_number }}</td>
                                    <td >{{ $item->existence }}</td>
                                    <td >{{ $item->price }}</td>
                                    <td >{{ $item->expiration_date }}</td>
                                    <td> 
                                        <a class="btn btn-outline-success" href="{{ route('addProductItem', $product->id) }}">Add</a>
                                    </td>
                                    </div>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>Product List</p>
                    @endif
                </div>
            </div>
            
    

@stop