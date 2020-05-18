@extends('layouts.header');

@section('content')
    <div class="postbar" style="background: url(/images/headerbg-4.jpg); background-size: auto;background-size: cover"></div>

    <div class="content">
        <div class="control"></div>

        <h2>Reports <a href="#download"><button><i class="ion-ios-arrow-round-down"></i> Download</button></a></h2>


        <table id="requests">
            <thead>
                <th>S/N</th>
                <th>Item</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Timestamp</th>
                <th>Status</th>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Garri</td>
                    <td>&#8358;25000</td>
                    <td>1</td>
                    <td>&#8358;25000</td>
                    <td>20/12/19 - 05:20PM</td>
                    <td><button id="update">Approved</button></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Noodles</td>
                    <td>&#8358;25000</td>
                    <td>1</td>
                    <td>&#8358;10000</td>
                    <td>20/12/19 - 05:20PM</td>
                    <td><button id="update">Approved</button></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Vegetable Oil</td>
                    <td>&#8358;12000</td>
                    <td>1</td>
                    <td>&#8358;25000</td>
                    <td>20/12/19 - 05:20PM</td>
                    <td><button id="update">Approved</button></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Rice</td>
                    <td>&#8358;32000</td>
                    <td>1</td>
                    <td>&#8358;25000</td>
                    <td>20/12/19 - 05:20PM</td>
                    <td><button id="update">Approved</button></td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Turkey & Chicken</td>
                    <td>&#8358;15000</td>
                    <td>1</td>
                    <td>&#8358;25000</td>
                    <td>20/12/19 - 05:20PM</td>
                    <td><button id="update">Approved</button></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection