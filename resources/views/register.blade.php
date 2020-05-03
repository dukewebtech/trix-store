@extends('layouts.header');

@section('content')
<div class="content">
    <div class="control"></div>

    <h2>Register <a href="index.blade.php"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>

    <form method="post" action="stocks/index.blade.php">

        <p><i class="ion-ios-person"></i> <input type="text" name="" placeholder="Username"/></p>

        <p><i class="ion-ios-mail"></i> <input type="text" name="" placeholder="E-mail"/></p>

        <p>
            <i class="ion-ios-star"></i>
            <select>
                <option selected disabled>Position</option>
                <option value="Manager">Manager</option>
                <option value="Admin">Admin</option>
                <option value="Personnel">Personnel</option>
            </select>
        </p>

        <p><i class="ion-ios-lock"></i> <input type="text" name="" placeholder="Password"/></p>

        <p><i class="ion-ios-lock"></i> <input type="text" name="" placeholder="Confirm Password"/></p>

        <p><button id="update">Save</button></p>

    </form>
</div>

@endsection

