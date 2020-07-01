@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Cost</th>
                <th>Create at</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->order as $order)
            <tr>
                <th>{{$order->id}}</th>
                <th>{{$order->cost}}</th>
                <th>{{$order->created_at}}</th>
                <th>
                    @if($order->done == false)
                      WAITING
                    @else
                      FINISHED
                    @endif
                </th>
                <td>
                <form action="{{route('manage.detail', $order->id)}}" method="GET">
                {{csrf_field()}}

                <button type="submit" class="btn btn-info">Detail</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

        <div class="row justify-content-center">
            <a href="{{route('home')}}" class="btn btn-success">Return Home</a>
        </div>

    </div>


</div>

@endsection
