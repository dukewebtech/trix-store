
@extends('layouts.header');

@section('content')
    <div class="postbar" style="background: url(/images/headerbg-2.jpg); background-size: auto;background-size: cover"></div>

    <div class="content">
        <div class="control"></div>

        <h2>Edit Stock <a href="/stocks"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>

        <form method="post" action="/stocks/update">
            @csrf

            <p><i class="ion-ios-nutrition"></i> <input type="text" name="" placeholder="Item Name" value="Garri"/></p>

            <p>
                <i class="ion-ios-funnel"></i>
                <select>
                    <option selected disabled>Measurement</option>
                    <option value="basket" selected>Basket</option>
                    <option value="cups">Cup</option>
                    <option value="bags">Bags</option>
                    <option value="carton">Carton</option>
                    <option value="pack">Pack</option>
                    <option value="litres">Litres</option>
                    <option value="single">Single</option>
                </select>
            </p>

            <p><i class="ion-ios-cash"></i> <input type="text" name="" placeholder="Cost Per Unit" value="25000"/></p>

            <p><i class="ion-ios-add"></i> <input type="text" name="" placeholder="Available" value="10"/></p>

            <p><i class="ion-ios-remove"></i> <input type="text" name="" placeholder="Minimum Unit" value="1"/></p>

            <p><button id="update" class="split">Save</button> <button id="delete"class="split">Delete</button></p>
        </form>
    </div>
@endsection