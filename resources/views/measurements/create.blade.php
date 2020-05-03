@extends('layouts.header')

@section('content')
<div class="content">
                <div class="control"></div>

                <h2>New Measurement <a href="stocks.html"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>

{{--                <form method="POST" action="store>--}}
{{--              {{csrf_field()}}--}}
{{--                    <p><i class="ion-ios-nutrition"></i> <input type="text" name="name" placeholder="Item Name"/></p>--}}
{{--                    <p><button id="update">Save</button></p>--}}
{{--    <button type="submit" class="btn btn-success">Publish</button>--}}

{{--    </form>--}}



    <form method="POST" action="/measurements/store">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Title </label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            <small id="emailHelp" class="form-text text-muted">Enter a title for your post.</small>
        </div>
        <button type="submit" class="btn btn-success">Publish</button>
    </form><!-- /.blog-post -->

@endsection
