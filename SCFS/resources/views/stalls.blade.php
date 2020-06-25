@extends('layouts.app')
<link href="css/stall.css" type="text/css" rel="stylesheet">
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

    <div class="row pt-3">
        <div class="col-4 justify-content-center">
        <div class="productName">{{$stall->products[0]->name}}</div>
            <div class="btn btn-primary">Add to order</div>
        </div>
        <div class="col-4 justify-content-center">
        <div class="productName">{{$stall->products[1]->name}}</div>
            <div class="btn btn-primary">Add to order</div>
        </div>
        <div class="col-4 justify-content-center">
        <div class="productName">{{$stall->products[2]->name}}</div>
            <div class="btn btn-primary">Add to order</div>
        </div>
    </div>


</div>

@endsection
