@extends('layout')

@section('content')
   
            <div class="row justify-content-center align-items-center vh-100" style="border: 1px solid red; padding: 12px">
                <div class=" d-flex flex-column w-50 bg-white rounded shadow p-3" style=""> 
                    <form method="post" action="{{ url('/products/'.$products->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="name">Name Product: </label>
                            <input type="text" class="form-control" name="name" placeholder="Name Product" value="{{ $products->name}}">
                            
                        </div>
                        <div class="form-group">
                            <label for="lotNumber">Lot Number: </label>
                            <input type="number" class="form-control" name="lot_number"placeholder="Lot Number" value="{{ $products->lot_number }}">
                        </div>
                        <div class="form-group">
                            <label for="existence">existence: </label>
                            <input type="number" class="form-control" name="existence" placeholder="Existences" value="{{ $products->existence }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price: </label>
                            <input type="number" class="form-control" name="price" placeholder="Price" step="any" value="{{ $products->price }}">
                        </div>
                        <div class="form-group">
                            <label for="date">Expiration Date: </label>
                            <input type="date" class="form-control" name="expiration_date" placeholder="Date" value="{{ $products->expiration_date }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
               
                
            </div>
    

@stop