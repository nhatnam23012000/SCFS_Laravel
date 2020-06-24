@extends('layouts.app')
<link href="css/stall.css" type="text/css" rel="stylesheet">
@section('content')





<a href="">{{$stall->products[0]->name}}</a>
<div>{{$stall->products[0]->cost}}</div>

@endsection 