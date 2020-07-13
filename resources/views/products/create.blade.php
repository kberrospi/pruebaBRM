@extends('layout')

@section('content')
            <div class="row justify-content-center align-items-center vh-100" style=" padding: 12px">
                <div class=" d-flex flex-column w-50 bg-white rounded shadow p-3" style=""> 
                    <form method="post" action="{{ url('products') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Code Product: </label>
                            <input type="text" class="form-control" name="cod_prod" placeholder="Code Product">
                            
                        </div>
                        <div class="form-group">
                            <label for="name">Name Product: </label>
                            <input type="text" class="form-control" name="name" placeholder="Name Product">
                            
                        </div>
                        <div class="form-group">
                            <label for="lotNumber">Lot Number: </label>
                            <input type="number" class="form-control" name="lot_number"placeholder="Lot Number">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Existences: </label>
                            <input type="number" class="form-control" name="existence" placeholder="Extistences">
                        </div>
                        <div class="form-group">
                            <label for="price">Price: </label>
                            <input type="number" class="form-control" name="price" placeholder="Price" step="any">
                        </div>
                        <div class="form-group">
                            <label for="date">Expiration Date: </label>
                            <input type="date" class="form-control" name="expiration_date" placeholder="Date">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
@stop