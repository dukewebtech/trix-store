@extends('layouts.header');

@section('content')
    <div class="postbar" style="background: url(/images/headerbg-1.jpg); background-size: auto;background-size: cover"></div>

    <div class="content">
        <div class="control"></div>

        <h2>Dashboard <a href="/reports"><button><i class="ion-ios-stats"></i> Summary</button></a></h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card sc">
                    <span class="infos">{{ $summary['stocks'] }} <i class="ion-ios-basket"></i></span>
                    <span class="label">Stocks Available</span>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="card sc">
                    <span class="infos">{{ $summary['requisitions'] }} <i class="ion-ios-list-box"></i></span>
                    <span class="label">Requisition ( Total )</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card bg">
                    <span class="infos"><font color="#c30">{{ $summary['finishedStcoks'] }}</font> <i class="ion-ios-trending-down"></i></span>
                    <span class="label">Finished Stocks</span>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="card bg">
                    <span class="infos"><font color="#f90">{{ $summary['pendingApproval'] }}</font> <i class="ion-ios-checkbox"></i></span>
                    <span class="label">Pending Approval</span>
                </div>
            </div>
        </div>
    </div>
@endsection
