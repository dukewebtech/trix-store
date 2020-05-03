@extends('layouts.header')

@section('content')
    <div class="content">
        <div class="control"></div>

        <h2>New Measurement <a href="stocks.html"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>
        <form method="POST" action="/measurements/{{$measure->id}}">
            @method('PUT')
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Title </label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name"  placeholder="{{$measure->name}}" value="">
                <small id="emailHelp" class="form-text text-muted">Enter a title for your post.</small>
            </div>
            <button type="submit" class="btn btn-success">Publish</button>
        </form><!-- /.blog-post -->

@endsection
