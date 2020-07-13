@extends('layout')

@section('content')
   
            <div class="row justify-content-center align-items-center vh-100" style=" padding: 12px">
                <div class=" d-flex flex-column w-50 bg-white rounded shadow p-3" style=""> 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Product Code</th>
                                <th scope="col">Name</th>
                                <th scope="col">Lot Number</th>
                                <th scope="col">Existences</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiration Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($products as $product)
                                <tr>
                                    <td >{{ $product->cod_prod}}</td>
                                    <td >{{ $product->name}}</td>
                                    <td >{{ $product->lot_number}}</td>
                                    <td >{{ $product->existence}}</td>
                                    <td >{{ $product->price}}</td>
                                    <td >{{ $product->expiration_date}}</td>
                                    <td> 
                                        <a class="btn btn-outline-warning" href="{{ url('/products/'.$product->id.'/edit') }}">Editar</a>
                                        <form method="post" action="{{ url('/products/'.$product->id) }}">
                                        {{ csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Delete?');">Delete</button>
                                        </form> 
                                    </td>
                                    </div>
                                    
                                </tr>
                            @endforeach
                               
                                
                            
                        </tbody>
                    </table>
                </div>
            </div>
    

@stop