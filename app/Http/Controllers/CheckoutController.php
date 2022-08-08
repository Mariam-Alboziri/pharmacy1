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
        $request->validate([
        'user_id' => auth()->user() ? auth()->user()->id : null,
        'billing_fname'          =>$request->fname,
        'billing_lname'          =>$request->lname,
        'billing_company_name'   =>$request->company,
        'billing_address'        =>$request->address,
        'billing_email'          =>$request->email,
        'billing_phone'          =>$request->phone,
       // 'billing_total'          =>null,
        'billing_notes'          =>$request->note,

    ]);

    $data=$request->all();
    $order=new Order();

    $order->user_id              = $request->user_id ;
    $order->billing_fname        = $request->fname ;
    $order->billing_lname        = $request->lname ;
    $order->billing_company_name = $request->company ;
    $order->billing_address      = $request->address ;
    $order->billing_email        = $request->email;
    $order->billing_phone        = $request->phone ;
    $order->notes                = $request->note ;

    $order->save();

    return redirect('/thanckyou');









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
