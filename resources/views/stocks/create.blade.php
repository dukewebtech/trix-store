@extends('layouts.header')

@section('content')
<div class="content">
                <div class="control"></div>

                <h2>New Stock <a href="stocks.html"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>

                <form method="post" action="store">

                    {{csrf_field()}}
                    <p><i class="ion-ios-nutrition"></i> <input type="text" name="item" placeholder="Item Name"/></p>

                    <p>
                        <i class="ion-ios-funnel"></i>
                        <select name="measurementId">
                            <option selected disabled>Measurement</option>
                            <option value="1">Basket</option>
                            <option value="2">Cup</option>
                            <option value="7">Bags</option>
                            <option value="3">Carton</option>
                            <option value="4">Pack</option>
                            <option value="5">Litres</option>
                            <option value="6">Single</option>
                        </select>
                    </p>

                    <p><i class="ion-ios-cash"></i> <input type="number" name="costPerUnit" placeholder="Cost Per Unit"/></p>

                    <p><i class="ion-ios-add"></i> <input type="number" name="availableQuantity" placeholder="Available"/></p>

                    <p><i class="ion-ios-remove"></i> <input type="number" name="minimumUnit" placeholder="Minimum Unit"/></p>

{{--                    <p><button id="post">Save</button></p>--}}

                    <button type="submit" class="btn btn-success">Publish</button>
                </form>
@endsection
