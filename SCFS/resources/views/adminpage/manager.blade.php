@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="text-center">TODAY'S REPORT</h1>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Date</th>
                <th>Stall</th>
                <th>Income</th>
                <th>Outcome</th>
                <th>Note</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th>23-1-2020</th>
                <th>Bao Ky fried rice</th>
                <th>5620000Đ</th>
                <th>3750000Đ</th>
                <th>None</th>
                <th>
                    <button class="btn btn-info">Detail</button>
                </th>
            </tr>
            <tr>
                <th></th>
                <th>Hoang Dat veggie hotpot</th>
                <th>7680000Đ</th>
                <th>4620000Đ</th>
                <th>None</th>
                <th>
                    <button class="btn btn-info">Detail</button>
                </th>
            </tr>
        </tbody>

    </table>

</div>

@endsection
