@extends('layouts.header');

@section('content')
<div class="content">
    <div class="control"></div>

    <h2>Measurements <a href="/measurements/create"><button><i class="ion-ios-basket"></i> New Measurements</button></a></h2>


    <table id="stocks">
        <thead>
        <th>S/N</th>
        <th>Item</th>
        <th>Manage</th>
        </thead>

        <tbody>
        <?php   $sn = 0;  ?>
        <tr>
            @foreach ($measurements as $measurement )
            <td>{{$sn ++}}</td>
            <td>{{$measurement->name}}</td>
            <td>
                <a href="{{$measurement->id}}/edit"><button id="update">Update</button></a>
                <a href="#"><button id="delete">Delete</button></a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>

@endsection


