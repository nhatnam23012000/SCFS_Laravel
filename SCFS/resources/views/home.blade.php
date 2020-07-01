@extends('layouts.app')

@section('content')
<div class="container text-center pt-5">
    <div class="order">
    <a href="{{'/order'}}" id="order" class="btn btn-primary order-button">ORDER NOW!</a>
    </div>
    <div class="manager pt-5">
    <a href="{{route('manage.show', auth()->id())}}" id="order" class="btn btn-primary manage-button">MANAGE ORDER</a>
    </div>
</div>
@endsection
