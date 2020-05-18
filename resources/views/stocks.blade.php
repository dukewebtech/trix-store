@extends('layouts.header');

@section('content')
    <div class="postbar" style="background: url(/images/headerbg-2.jpg); background-size: auto;background-size: cover"></div>

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
            <tr>
                <td>1</td>
                <td>Garri</td>
                <td>Bag</td>
                <td>&#8358;25,000</td>
                <td>10</td>
                <td>1</td>
                <td>20/12/19 - 05:20PM</td>
                <td>
                    <a href="/stocks/update/1"><button id="update">Update</button></a>
                    <a href="#"><button id="delete">Delete</button></a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Noodles</td>
                <td>Carton</td>
                <td>&#8358;25,000</td>
                <td>25</td>
                <td>10</td>
                <td>20/12/19 - 05:20PM</td>
                <td>
                    <a href="/stocks/update/2"><button id="update">Update</button></a>
                    <a href="#"><button id="delete">Delete</button></a>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Vegetable Oil</td>
                <td>Litre</td>
                <td>&#8358;25,000</td>
                <td>50</td>
                <td>25</td>
                <td>20/12/19 - 05:20PM</td>
                <td>
                    <a href="/stocks/update/3"><button id="update">Update</button></a>
                    <a href="#"><button id="delete">Delete</button></a>
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td>Rice</td>
                <td>Bag</td>
                <td>&#8358;25,000</td>
                <td>5</td>
                <td>5</td>
                <td>20/12/19 - 05:20PM</td>
                <td>
                    <a href="/stocks/update/4"><button id="update">Update</button></a>
                    <a href="#"><button id="delete">Delete</button></a>
                </td>
            </tr>

            <tr>
                <td>5</td>
                <td>Turkey & Chicken</td>
                <td>Single</td>
                <td>&#8358;25,000</td>
                <td>100</td>
                <td>50</td>
                <td>20/12/19 - 05:20PM</td>
                <td>
                    <a href="/stocks/update/5"><button id="update">Update</button></a>
                    <a href="#"><button id="delete">Delete</button></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection


