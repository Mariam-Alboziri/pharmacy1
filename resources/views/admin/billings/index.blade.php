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
                    @foreach ($billings as $billing)
                    <tr>
                        <td>{{$billing->id}}</td>
                        <td><a href="">{{$billing->billing_fname}}</a></td>
                        <td>{{$billing->billing_lname}}</td>
                        <td>{{$billing->billing_company_name}}</td>
                        {{-- <td>{{$billing->address}}</td> --}}
                        {{-- <td>{{$billing->email}}</td> --}}
                        {{-- <td>{{$billing->phone}}</td> --}}
                        {{-- <td>{{$billing->note}}</td> --}}
                        <td>{{$billing->created_at}}</td>
                        <td class="text-center row">
                            <div class="btn-group" role="group">
                                <div class="col-md-6 padding-right: 5px padding-left: 5px;">
                                    <a href="{{ route('admin.checkout.show', $billing) }}" class="btn btn-sm btn-warning">
                                        Show
                                    </a>
                                </div>
                                <div class="col-md-6 padding-right: 5px padding-left: 5px;">
                                    <form action="{{ route('admin.checkout.destroy', $billing) }}" method="POST">
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

