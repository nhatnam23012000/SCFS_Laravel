@extends('layouts.app')

@section('content')




<div class="container">

    <h1 class="text-center">TODAY'S ORDER</h1>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer name</th>
                <th>Create Time</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($orders as $order )
                @if ($order->done == FALSE)
                    <tr>
                        <th>{{$order->id}}</th>
                        <th>{{$order->users->name}}</th>
                        <th>{{$order->created_at}}</th>
                        <td>
                            <form action="{{route('cook.detail', $order->id)}}" method="GET">
                                {{csrf_field()}}

                                <button type="submit" class="btn btn-info">Detail</button>
                                </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>

    </table>

</div>

@endsection
