@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Orders
                   
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <td >Customer name</td>
                        <td >Customer email</td>
                        <td >Product title</td>
                        <td >price</td>
                        <td >Quantity</td>
                        <td >Status</td>
                        <td >Action</td>
                        <td >Print PDF</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $order)

                        <tr >
                            <td >{{$order->name}}</td>
                            <td >{{$order->email}}</td>
                            <td >{{$order->name}}</td>
                            <td >{{$order->selling_priceprice}}</td>
                            <td >{{$order->quantity}}</td>
                            <td >{{$order->atatus}}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('updatestatus',$order->id)}}">
                                    Delivered
                                </a>
                            </td>
                            <td>
                            <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
                            </td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    


@endsection