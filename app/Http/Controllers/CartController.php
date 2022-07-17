<?php

namespace App\Http\Controllers;

//use Gloudemans\Shoppingcart\Facades\Cart;

//use Gloudemans\Shoppingcart\Facades\Cart;

//use Darryldecode\Cart\Cart;

//use Gloudemans\Shoppingcart\Facades\Cart;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
//use Gloudemans\Shoppingcart\Facades\Cart;





class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('pages.cart');
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('pages.cart', compact('cartItems'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $validated = $request->validate([
            'id'        =>'required',
            'name'      => 'required|string|min:3|max:255',
            'price'     => 'required',

        ]);

        $cart = CartController::create($validated);



        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,


        ]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.index');



      //  return redirect()->route('cart.index')->with('success_message','Item was added to your cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
