@extends('layouts.app')

@section('title','Messages')

@section('content')
    <section class="section layout_padding">
        <div class="container">
            <h3>Received Messages</h3>
            <table class="table table-hover ">
                <thead>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Message</th>
                        <th>received at</th>

                        {{-- <th colspan="2">action</th> --}}
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                    <tr>
                        {{-- <td>{{$message->id}}</td> --}}
                       {{-- <td>{{$message->id}}</td> --}}
                        <td><a href="{{route('messages.show',$message)}}">{{$message->id}}</a></td>
                        <td>{{$message->c_fname}}</td>
                        <td>{{$message->c_lname}}</td>
                        <td>{{$message->c_message}}</td>
                        <td>{{$message->created_at}}</td>
                        {{-- <td class="text-center row">
                            <div class="btn-group" role="group">

                                <div class="col-md-6 padding-right: 5px padding-left: 5px;">
                                    {{-- <form action="{{ route('admin.messages.destroy', $message) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="  submit" value="delete" class="btn btn-sm btn-danger">Delete</button> --}}
                                    {{-- </form>
                                </div>
                            </div>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>

@endsection

