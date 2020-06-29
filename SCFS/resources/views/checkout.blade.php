@extends('layouts.app')
<link rel="stylesheet" href="/css/checkout.css" type="text/css" />
@section('content')

<h1 class="text-center">Payment processed successfully</h1>

<div class="row justify-content-center">
    <div class="col-4 d-flex justify-content-center">
        <a class="btn btn-success"href="{{route('home')}}">return home</a>
</div>

@endsection
