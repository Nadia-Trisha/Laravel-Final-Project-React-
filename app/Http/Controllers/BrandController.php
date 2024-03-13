<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(3);
        
        return view('backend.brands.index', compact('brands'))
                    ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'designation' => 'required|min:4',
            'image' => 'mimes:jpg,jpeg,png',
        ]);

        $filename = time() . "." . $request->image->extension();
        
        $data = [ 
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $filename, 
        ];

        // dd($data);

        $brand = Brand::create($data);
        
        if ($brand) {
            $request->image->move('images/cake', $filename); 
            return redirect()->route('brands.index')->with('msg','masterchief insert successfully ');   
            // return redirect->()route->()->with('msg', 'Successfully Added');
        }
        
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('backend.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)

    {

        $products = Brand::find($brand);
        
         return view('backend.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $data = $request->except(['_token']);

        $brand->update($data);

        return redirect()->route('brands.index')
                        ->with('success', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand) 
    {
        $brand->delete();
         
        return redirect()->route('brands.index')
                        ->with('success', 'Brand deleted successfully');
    }
}
