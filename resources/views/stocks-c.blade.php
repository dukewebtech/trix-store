
@extends('layouts.header');

@section('content')
    <div class="postbar" style="background: url(/images/headerbg-2.jpg); background-size: auto;background-size: cover"></div>

    <div class="content">
        <div class="control"></div>

        <h2>New Stock <a href="/stocks"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>

        <form method="post" action="/stocks/create">
            @csrf

            <p><i class="ion-ios-nutrition"></i> <input type="text" name="" placeholder="Item Name"/></p>

            <p>
                <i class="ion-ios-funnel"></i>
                <select>
                    <option selected disabled>Measurement</option>
                    <option value="basket">Basket</option>
                    <option value="cups">Cup</option>
                    <option value="bags">Bags</option>
                    <option value="carton">Carton</option>
                    <option value="pack">Pack</option>
                    <option value="litres">Litres</option>
                    <option value="single">Single</option>
                </select>
            </p>

            <p><i class="ion-ios-cash"></i> <input type="text" name="" placeholder="Cost Per Unit"/></p>

            <p><i class="ion-ios-add"></i> <input type="text" name="" placeholder="Available"/></p>

            <p><i class="ion-ios-remove"></i> <input type="text" name="" placeholder="Minimum Unit"/></p>

            <p><button id="update">Save</button></p>
        </form>
    </div>
@endsection
