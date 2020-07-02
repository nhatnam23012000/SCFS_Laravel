@extends('layouts.app')

@section('content')

<div class="container">

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->products as $product)
            <tr>
                <th>{{$product->name}}</th>
                <th>{{$product->pivot->quantity}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>

    <form class="align-content-center" action="{{route('cook.update', $order->id)}}" method="GET">
        {{csrf_field()}}

        <button type="submit" class="btn btn-success">Notify Done</button>
    </form>

    <form class="align-content-center" action="{{route('cook.update', $order->id)}}" method="GET">
        {{csrf_field()}}

        <button type="submit" class="btn btn-danger">Notify Out of order</button>
    </form>


</div>

@endsection
