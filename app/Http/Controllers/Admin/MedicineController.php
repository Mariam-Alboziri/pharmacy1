<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;


class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines=Medicine::all();
        $categories=Category::all(['id','name']);
        return view('admin.medicines.index',compact('medicines','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all(['id','name']);
        return view('admin.medicines.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validate = $request->validate([
        'name'        =>'required',
        // 'type'        =>'required',
        'brand'       =>'required',
        'category_id' =>'required|numeric|exists:categories,id',
        'price'       =>'required|numeric|min:100',
        'description' =>'required',
        ]);
        $medicine=new Medicine;
        $medicine=Medicine::create($validate);


        // $medicine->name=$request->name;
        // $medicine->type =$request->type;
        // $medicine->brand =$request->brand;
        // $medicine->price =$request->price;
        // $medicine->description =$request->description;
        // $medicine->save();

        return redirect()->route('admin.medicines.index');


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        return view('medicines.show',compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)

    {

        $categories=Category::all(['id','name']);
        return view('admin.medicines.edit',compact('medicine','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
      $validated=  $request->validate([
            'name'        =>'required',
            // 'type'        =>'required',
            'brand'       =>'required',
            'category_id' =>'required',
            'price'       =>'required|numeric|min:100',
            'description' =>'required|string',
            ]);

            $medicine->update($validated);
            // $medicine->name=$request->name;
            // $medicine->type =$request->type;
            // $medicine->brand =$request->brand;
            // $medicine->price =$request->price;
            // $medicine->description =$request->description;
            //$medicine->save();

            // $categories=Category::all(['id','name']);
            return redirect()->route('admin.medicines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('admin.medicines.index');
    }
}
