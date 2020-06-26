@extends('layouts.app')
<link href="/css/cart.css" type="text/css" rel="stylesheet">
@section('content')
<div class="container">
    @if (Cart::count() > 0)
    <div class="row justify-content-center">
        <div class="col-4 d-flex justify-content-center">
            <h2>{{ Cart::count() }} item(s) in your order</h2>
        </div>
    </div>
    <div class="row justify-content-center">
       <table class="table table-dark">
           <thead>
                <tr>
                    <th scope="col">Stall</th>
                    <th scope="col">Item name</>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                </tr>
           </thead>
           <tbody>
               @foreach (Cart::content() as $item)
                <tr>
                    <td>{{$item->model->stall->name}}</td>
                    <td>{{$item->model->name}}</td>
                    <td>{{$item->qty}}</td>
                    <th>{{$item->model->presentPrice() * $item->qty}}Đ</th>
                    <td>
                    <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row">Total</th>
                    <td></td>
                    <td></td>
                    <th scope="row">{{Cart::subtotal()}}Đ</th>
                </tr>
           </tbody>
       </table>
    </div>
    <div class="row justify-content-center">
        <div class="col-4 d-flex justify-content-center">
            <button class="btn btn-success">Continue to add</button>
            <button class="btn btn-success">Checkout</button>
        </div>
    </div>

    @else
        <h3>Sorry, there is nothing here</h3>
        <a href="{{route('order')}}" class="btn btn-danger">Return to stalls</a>
    @endif
</div>
@endsection
