<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $datos['products'] = Products::all(); 
        return view('products.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  $dataProducts=request()->all(); */
        $dataProducts=request()->except('_token');
        Products::insert($dataProducts);

        $datos['products'] = Products::all(); 
        return view('products.index', $datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataProducts=request()->except(['_token', '_method']);
        Products::where('id','=',$id)->update($dataProducts);
        
        $datos['products'] = Products::all(); 
        return view('products.index', $datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect('products');
    }
}
