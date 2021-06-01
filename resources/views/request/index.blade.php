@extends('layouts.header');

@section('content')
    <div class="content">
        <div class="control"></div>

        <h2>Stocks <a href="/request/create"><button><i class="ion-ios-basket"></i> New Request</button></a></h2>
        <table id="stocks">
            <thead>
                <th>S/N</th>
                <th>Item collected</th>
                <th>Name of Chef</th>
                <th>Date Collected</th>
                <th>Manage</th>
            </thead>
            <tbody>
            <?php $sn= 1?>
            @foreach($allRequest as $request)
                <tr>
                    <td> {{$sn ++}}</td>
                    <td>{{$request->itemRequest}} </td>
                    <td>{{$request->staffName}}  </td>
                    <td>{{$request->created_at->diffForhumans()}}  </td>
                    <td>
                        <a href=""><button id="update">View</button></a>
                        <a href="#"><button id="delete">Update</button></a>
                        <a href="#"><button id="delete">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection


