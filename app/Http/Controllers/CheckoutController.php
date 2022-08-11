<?php

namespace App\Http\Controllers;

use App\Models\MedicineOrder;
use App\Models\Order;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::paginate(6);

        return view('admin.checkout.index', compact('orders'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cartItems = \Cart::getContent();
        return view('admin.checkout.create',compact('cartItems'));
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
        'user_id'                => auth()->user() ? auth()->user()->id : null,
        'billing_fname'          =>'required',
        'billing_lname'          =>'required',
        'billing_company_name'   =>'required',
        'billing_address'        =>'required',
        'billing_email'          =>'required',
        'billing_phone'          =>'required',
       // 'billing_total'          =>null,
        'billing_notes'          =>'required',

    ]);
$order=Order::create($validated);






        // MedicineOrder::create([
        //     'medicine_id' => $item->model->id,
        //     'order_id'    => $order->id,
        //     'quantity'    => $item->qty,
        // ]);


    return redirect()->route('thanckyou.index');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('admin.checkout.show', compact('order'));
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
