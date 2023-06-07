@extends('layouts.app')

@section('content')
    <h1>Cart</h1>
    
    @if ($cartItems->count() > 0)
        <ul>
            @foreach ($cartItems as $item)
                <li>{{ $item->product->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty</p>
    @endif
@endsection
