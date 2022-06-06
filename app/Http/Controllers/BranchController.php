<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $branch = Branch::where('status','active')->get();
        return view('branches.index', compact('branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('branches.create');
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
            'name' => ['required'], 
            'city' => ['required'], 
            'state' => ['required'], 
            'address' => ['required'], 
            'phone' => ['required'], 
            'status' => ['required', Rule::in(['active','inactive'])]
        ]);
 

        Branch::create($data);

        return redirect()->route('branches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        
        return view('branches.show', compact('branch')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {


        return view('branches.edit', compact('branch')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $data = $request->validate([ 
            'name' => ['required'], 
            'city' => ['required'], 
            'state' => ['required'], 
            'address' => ['required'], 
            'phone' => ['required'], 
            'status' => ['required', Rule::in(['active','inactive'])]
        ]);
 
        $branch->update($data);
        
        return  redirect()->route('branches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
