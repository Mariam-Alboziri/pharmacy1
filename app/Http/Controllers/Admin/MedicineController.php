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
        // $medicines=Medicine::all();
        $medicines=Medicine::take(12)->get();


        $categories=Category::all(['id','name']);
        $medicines=Medicine::latest()->paginate(3);
        return view('admin.medicines.index')->with('medicines',$medicines);
        // return view('admin.medicines.index',compact('medicines'));




        // $query=Medicine::latest();
        // if ($request->filled('category')){
        //    $query->where('category_id',$request->category);
        // }
        // if ($request->filled('q')){

        //     $query->where(function($q) use($request){
        // $q->where('name','like', "%$request->q%" );
        //     } );
        // }
        //         //$medicines=$query->paginate(3);
        //         //$categories=Category::has('medicines')->get();
        //         return view ('admin.medicines.index',compact('medicines','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all(['id','name']);
        session()->flash('message','The product was added successfully');
        session()->flash('message-type','success');

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
      //  $request->dd();
      $validated = $request->validate([
        'name'        =>'required',
        // 'type'        =>'required',
        'brand'       =>'required',
        'category_id' =>'required|numeric|exists:categories,id',
        'price'       =>'required|numeric|min:100',
        'description' =>'required',
        'featured_image'=>'required|file|image',
        ]);
        $validated['featured_image']=$request->file('featured_image')->store('/','public');
      //  $medicine=new Medicine;

        $medicine = Medicine::create($validated);


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
        return view('admin.medicines.show',compact('medicine'));
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
