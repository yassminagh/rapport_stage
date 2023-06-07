@extends('layouts.app')

@section('content')
    <h1>Cart</h1>
    
    @if ($cart->count() > 0)
            
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
        <form action="{{url('order')}}" method="POST">
            
@csrf
                    @foreach ($cart as $item)
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->selling_price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <a class="btn btn-danger" href="{{url('delete',$item->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <button class="btn btn-success">Confirm Order</button>
</form>
        @else
            <p>No items in the cart.</p>
        @endif

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

  
@endsection
