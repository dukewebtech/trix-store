@extends('layouts.header');

@section('content')
    <div class="content">
        <div class="control"></div>

        <h2>Requisitions <a href="#approve"><button><i class="ion-ios-checkmark"></i> Approve</button></a></h2>


        <table id="requests">
            <thead>
            <th>S/N</th>
            <th>Item</th>
            <th>Cost</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Timestamp</th>
            <th>Manage</th>
            </thead>

            <tbody>
            <tr>
                <td>1</td>
                <td>Garri</td>
                <td>&#8358;25000</td>
                <td><input type="text" name="" placeholder="Quantity"/></td>
                <td>&#8358;25000</td>
                <td>20/12/19 - 05:20PM</td>
                <td><button id="delete">Remove</button></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Noodles</td>
                <td>&#8358;25000</td>
                <td><input type="text" name="" placeholder="Quantity"/></td>
                <td>&#8358;10000</td>
                <td>20/12/19 - 05:20PM</td>
                <td><button id="delete">Remove</button></td>
            </tr>

            <tr>
                <td>3</td>
                <td>Vegetable Oil</td>
                <td>&#8358;12000</td>
                <td><input type="text" name="" placeholder="Quantity"/></td>
                <td>&#8358;25000</td>
                <td>20/12/19 - 05:20PM</td>
                <td><button id="delete">Remove</button></td>
            </tr>

            <tr>
                <td>4</td>
                <td>Rice</td>
                <td>&#8358;32000</td>
                <td><input type="text" name="" placeholder="Quantity"/></td>
                <td>&#8358;25000</td>
                <td>20/12/19 - 05:20PM</td>
                <td><button id="delete">Remove</button></td>
            </tr>

            <tr>
                <td>5</td>
                <td>Turkey & Chicken</td>
                <td>&#8358;15000</td>
                <td><input type="text" name="" placeholder="Quantity"/></td>
                <td>&#8358;25000</td>
                <td>20/12/19 - 05:20PM</td>
                <td><button id="delete">Remove</button></td>
            </tr>
            </tbody>
        </table>

        <div class="w-overlay">
            <div class="preview">

                <div class="header">
                    <img src="images/logo.png" width="50" height="50" alt=""/>
                    <h3>Requisition Lists
                        <span class="ion-ios-print position-absolute no-print" style="right: 110px; font-size: 20px;" onclick="window.print()"></span>
                        <span class="ion-ios-close position-absolute no-print" style="right: 50px" onclick="$('.w-overlay').stop(true).fadeOut('slow')"></span>
                        <span class="ion-ios-checkmark position-absolute no-print" style="right: 80px" onclick="approveRequistions()"></span></h3>

                    <div class="row info">
                        <div class="col-md-4 mb-2"><b>Order ID:</b> <span>-</span></div>
                        <div class="col-md-4 mb-2"><b>Requisitions:</b> <span>-</span></div>
                        <div class="col-md-4 mb-2"><b>Overall Total:</b> <span>-</span></div>
                        <div class="col-md-4 mb-2"><b>Status:</b> <span>Pending</span></div>
                        <div class="col-md-4 mb-2"><b>Tracking No:</b> <span>-</span></div>
                        <div class="col-md-4 mb-2"><b>Date:</b> <span>20/12/19</span></div>
                    </div>
                </div>

                <div class="orders" data-api="index.html">
                    <table id="orders">
                        <thead>
                        <th>S/N</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Cost</th>
                        <th>Total</th>
                        </thead>

                        <tbody>
                        <!--- Content will be automatically injected from the model -->
                        </tbody>
                    </table>
                </div>

                <table>
                    <tbody class="model d-none" id="orders">
                    <tr>
                        <td>:id</td>
                        <td>:itemName</td>
                        <td>:quantity</td>
                        <td>:cost</td>
                        <td>:getPrice</td>
                    </tr>
                    </tbody>
                </table>

                <div class="hr">
                    <span class="float-left text-left pl-4"><b>TOTAL:</b></span> <span class="float-right text-right pr-4"><b>:getTotal</b></span>
                </div>

                <div class="signform pr-5">
                    <input type="text" id="signature" placeholder=""/> <span>Manager  </span>
                </div>

                <div class="signform pl-5">
                    <input type="text" id="signature" placeholder=""/> <span>Personnel</span>
                </div>
            </div>
        </div>
    </div>
@endsection
