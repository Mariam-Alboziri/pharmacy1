@extends('layouts.admin')

@section('title','Orders')

@section('content')

    <section class="section layout_padding">
        <div class="container">
            <br>
            <h1>Received Orders</h1>
            <br>
            <table class="table table-hover ">
                <thead>
                        <th>id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Company name</th>
                        {{-- <th>Address</th> --}}
                        {{-- <th>Email</th> --}}
                        {{-- <th>Phone</th> --}}
                        {{-- <th>Notes</th> --}}
                        <th>received at</th>
                        <th colspan="2">action</th>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td><a href="">{{$order->fname}}</a></td>
                        <td>{{$order->lname}}</td>
                        <td>{{$order->company}}</td>
                        {{-- <td>{{$order->address}}</td> --}}
                        {{-- <td>{{$order->email}}</td> --}}
                        {{-- <td>{{$order->phone}}</td> --}}
                        {{-- <td>{{$order->note}}</td> --}}
                        <td>{{$order->created_at}}</td>
                        <td class="text-center row">
                            <div class="btn-group" role="group">
                                <div class="col-md-6 padding-right: 5px padding-left: 5px;">
                                    {{-- <a href="{{ route('admin.checkout.show', $order) }}" class="btn btn-sm btn-warning"> --}}
                                        Show
                                    </a>
                                </div>
                                <div class="col-md-6 padding-right: 5px padding-left: 5px;">
                                    {{-- <form action="{{ route('admin.checkout.destroy', $order) }}" method="POST"> --}}
                                        @csrf @method('DELETE')
                                        <button type="submit" value="delete" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>

@endsection

