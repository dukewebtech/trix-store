@extends('layouts.header')

@section('content')
    <div class="content">
        <div class="control"></div>

        <h2>New Request <a href="/request/"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>

        <form method="post" action="store">

            {{csrf_field()}}
            <p><i class="ion-ios-nutrition"></i> <input type="text" name="staffName" placeholder="Staff Name"/></p>

            <p>
                <i class="ion-ios-funnel"></i>
                <select name="itemRequest">
                    <option selected disabled>Item</option>
                    <option value="rice">Rice</option>
                    <option value="chicken">Chicken</option>
                    <option value="spag">Spag</option>
                    <option value="onion">Onion</option>
                </select>
            </p>

            <p><i class="ion-ios-cash"></i> <input type="number" name="quantity" placeholder="Quantity"/></p>

            <button type="submit" class="btn btn-success">Publish</button>
        </form>
@endsection
