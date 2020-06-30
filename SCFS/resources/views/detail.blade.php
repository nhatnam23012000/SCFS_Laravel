@extends('layouts.app')

@section('content')

<div class="container">

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->products as $product)
            <tr>
                <th>{{$product->name}}</th>
                <th>{{$product->cost}}</th>
                <th>{{$product->pivot->quantity}}</th>
                <th>{{$product->pivot->quantity * $product->cost}}</th>
            </tr>
            @endforeach
            <tr>
                <th>Total</th>
                <th></th>
                <th></th>
                <th>{{$order->cost}}</th>
            </tr>
        </tbody>
    </table>

    <div class="row justify-content-center">
        <a href="{{route('manage.show',auth()->user()->id)}}" class="btn btn-success">Back</a>
    </div>

</div>

@endsection
