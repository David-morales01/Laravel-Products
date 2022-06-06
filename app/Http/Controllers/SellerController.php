<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Branch;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $sellers = Seller::where('status','active')->get();
        return view('sellers.index', compact('sellers'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::all();

        return view('sellers.create', [
            'branches'=> $branches,
            'seller' => null,
        ]);
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
            'branch_id' => ['required', Rule::exists('branches', 'id')],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'dni' => ['required','size:14', Rule::unique('sellers')],
            'phone' => ['required', 'size:8'],
            'hired_at' => ['required'],
            'carnet' => ['required', Rule::unique('sellers')],
            'status' => ['required', Rule::in(['active','inactive'])]
        ]);

        $branch = Branch::find($data['branch_id']);

        Arr::forget($data, 'branch_id');

        $branch->sellers()->create($data);

        return redirect()->route('sellers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        
        return view('sellers.show', compact('seller')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {

        $branches = Branch::all();

        return view('sellers.edit', compact('branches', 'seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
         

        $data = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'dni' => ['required','size:14', Rule::unique('sellers')->ignore($seller->id)],
            'phone' => ['required', 'size:8'],
            'hired_at' => ['required'],
            'carnet' => ['required', Rule::unique('sellers')->ignore($seller->id)],
            'status' => ['required', Rule::in(['active','inactive'])]
        ]);

        $seller->update($data);
        
        return  redirect()->route('sellers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
