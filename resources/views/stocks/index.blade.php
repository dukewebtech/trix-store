@extends('layouts.header');

@section('content')
<div class="content">
    <div class="control"></div>

    <h2>Stocks <a href="/stocks/create"><button><i class="ion-ios-basket"></i> New Stock</button></a></h2>


    <table id="stocks">
        <thead>
        <th>S/N</th>
        <th>Item</th>
        <th>Measurement</th>
        <th>Cost (Unit)</th>
        <th>Available</th>
        <th>Minimum Unit</th>
        <th>Updated</th>
        <th>Manage</th>
        </thead>

        <tbody>
        <?php $sn = 1 ?>
        @foreach($stocks as $stock)
        <tr>
            <td>{{$sn ++}}</td>
            <td>{{$stock->item}}</td>
            <td>{{$stock->measurement->name}}</td>
            <td>₦{{$stock->costPerUnit}}</td>
            <td>{{$stock->availableQuantity}}</td>
            <td>1</td>
            <td>{{$stock->updated_at->diffForHumans()}}</td>
            <td>
                <a href="{{$stock->id}}/edit"><button id="update">Update</button></a>
                <a href="#"><button id="delete">Delete</button></a>
            </td>
        </tr>
            @endforeach


        </tbody>
    </table>
</div>

@endsection


