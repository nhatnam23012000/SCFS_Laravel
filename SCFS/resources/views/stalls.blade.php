@extends('layouts.app')
<link href="/css/stall.css" type="text/css" rel="stylesheet">
@section('content')

<div class="container">
    <div class="row">
        <div class="col-4 d-flex justify-content-center">
            <img src="{{$stall->products[0]->imageUrl}}" title="{{$stall->products[0]->name}}" style="max-height:  250px; max-width: 300px">
        </div>
        <div class="col-4 d-flex justify-content-center">
            <img src="{{$stall->products[1]->imageUrl}}" title="{{$stall->products[1]->name}}" style="max-height:  250px; max-width: 300px">
        </div>
        <div class="col-4 d-flex justify-content-center">
            <img src="{{$stall->products[2]->imageUrl}}" title="{{$stall->products[2]->name}}"style="max-height:  250px; max-width: 300px">
        </div>
    </div>

    <div class="row pt-3 productName">
        <div class="col-4 d-flex justify-content-center">
            <div class="productName">{{$stall->products[0]->name}}</div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="productName">{{$stall->products[1]->name}}</div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="productName">{{$stall->products[2]->name}}</div>
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-4 d-flex justify-content-center">
            {{--<a href=# class="btn btn-success">Add to order</a>--}}
            <form action="{{route('cart.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$stall->products[0]->id}}">
                <input type="hidden" name="name" value="{{$stall->products[0]->name}}">
                <input type="number" name="quantity">
                <input type="hidden" name="price" value="{{$stall->products[0]->cost}}">
                <button type="submit" class="btn btn-success">Add to order</button>
            </form>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <form action="{{route('cart.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$stall->products[1]->id}}">
                <input type="hidden" name="name" value="{{$stall->products[1]->name}}">
                <input type="number" name="quantity">
                <input type="hidden" name="price" value="{{$stall->products[1]->cost}}">
                <button type="submit" class="btn btn-success">Add to order</button>
            </form>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <form action="{{route('cart.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$stall->products[2]->id}}">
                <input type="hidden" name="name" value="{{$stall->products[2]->name}}">
                <input type="number" name="quantity">
                <input type="hidden" name="price" value="{{$stall->products[2]->cost}}">
                <button type="submit" class="btn btn-success">Add to order</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center pt-5">
        <div class="col-4 d-flex justify-content-center">
        <a class="btn btn-info"href="{{route('cart.index')}}">Check your order</a>
        </div>
    </div>

    <div class="row justify-content-center pt-5">
        <div class="col-4 d-flex justify-content-center">
        <a class="btn btn-info"href="{{route('order')}}">Back to stall</a>
        </div>
    </div>


</div>

@endsection
