<?php

namespace App\Http\Controllers;

use App\Items;
use App\Invoices;
use App\Products;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {   
        $product['products'] = Products::all(); 
        return view('items.index', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       
    }

    public function addProductItem($id)
    {
      
        $items = Products::findOrFail($id);
        return view ('items.crate', compact('items'));

    }

    private function addProductInvoice($product)
    {
        if ($product->existencia <= 0) {
            return redirect()->route("items.index")
                ->with([
                    "mensaje" => "No hay existencias del producto",
                    "tipo" => "danger"
                ]);
        }
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataProducts=request()->except('_token');
        Items::insert($dataProducts);

        return view('items.index', $items);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Invoices $invoices)
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
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoices  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoices  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
