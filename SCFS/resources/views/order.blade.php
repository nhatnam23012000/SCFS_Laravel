@extends('layouts.app')

@section('content')

<div class="container">
    <div class="content">Choose your stall</div>
    <div class="row justify">
        <div class="col-md-4">
            <a href="{{'/order/1'}}"><img src={{$stalls[0]->"image_link"}}></a>
        </div>
    </div>
</div>

@endsection