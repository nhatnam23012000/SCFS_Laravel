@extends('layouts.app')
<link href="css/order.css" type="text/css" rel="stylesheet">
@section('content')

<div class="container">
    <div class="content">Choose your stall</div>
    <div class="row pt-5">
        <div class="col-4 d-flex justify-content-center">
            <img id="StallImg" src="/jpg/ABa6OEd.jpg">
        </div>

        <div class="col-4 d-flex justify-content-center">
            <img id="StallImg" src="/jpg/VegetHotPot.jpg" >
        </div>

        <div class="col-4 d-flex justify-content-center">
            <img id="StallImg" src="/jpg/Hutieu76.jpg" >
        </div>
    </div>
    <div class="row justify-content-center pt-3">
        <div class="col-4 d-flex justify-content-center">
            <div>
                <a class="btn btn-success" href="">BAO KY FIRIED RICE</a>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div>
                <a class="btn btn-success" href="">HOANG DAT 2 VEGET HOTPOT</a>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div>
                <a class="btn btn-success" href="">HU TIEU 76</a>
            </div>
        </div>
    </div>
</div>

@endsection 