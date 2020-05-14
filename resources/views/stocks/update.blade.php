@extends('layouts.header')

@section('content')

<div class="content">
                <div class="control"></div>

                <h2>Edit Stock <a href="stocks/index"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>

    <form method="post" action="/stocks/{{$stock->id}}">

        {{csrf_field()}}
        @method('PUT')
        <p><i class="ion-ios-nutrition"></i> <input type="text" name="item" value="{{$stock->item}}" placeholder="Item Name"/></p>

        <p>
            <i class="ion-ios-funnel"></i>
            <select name="measurementId">
                <option selected disabled>Measurement</option>
                @foreach($measurement as $measure){

                <option value="{{$measure->id}}">{{$measure->name}}</option>
                    @endforeach
            </select>
        </p>

        <p><i class="ion-ios-cash"></i> <input type="number" name="costPerUnit"  value="{{$stock->costPerUnit}}" placeholder="Cost Per Unit"/></p>

        <p><i class="ion-ios-add"></i> <input type="number" name="availableQuantity"  value="{{$stock->availableQuantity}}" placeholder="Available"/></p>

        <p><i class="ion-ios-remove"></i> <input type="number" name="minimumUnit" value="{{$stock->availableQuantity}}" placeholder="Minimum Unit"/></p>

        {{--                    <p><button id="post">Save</button></p>--}}

        <button type="submit" class="btn btn-success">Publish</button>
    </form>
            </div>
@endsection
