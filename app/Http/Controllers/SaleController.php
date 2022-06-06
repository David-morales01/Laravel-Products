<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $branches = Branch::all();
        $sellers = Seller::all();
        $products = Product::all();

        return view('sales.create', compact('branches', 'sellers','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'seller_id' => ['required', Rule::exists('sellers', 'id')],
            'product_id' => ['required', Rule::exists('products', 'id')],
            'branch_id' => ['required', Rule::exists('branches', 'id')],
            'price' => ['required'],
            'quantity' => ['required']
        ]);

        Sale::create($data);
 
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        
        $branches = Branch::all();
        $sellers = Seller::all();
        $products = Product::all();

        return view('sales.create', compact('branches', 'sellers','products','sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        $data = $request->validate([
            'seller_id' => ['required', Rule::exists('sellers', 'id')],
            'product_id' => ['required', Rule::exists('products', 'id')],
            'branch_id' => ['required', Rule::exists('branches', 'id')],
            'price' => ['required'],
            'quantity' => ['required']
        ]);

        $sale->update($data);
 
        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
