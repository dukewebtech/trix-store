@extends('layouts.header');

@section('content')
    <div class="postbar" style="background: url(/images/headerbg-1.jpg); background-size: auto;background-size: cover"></div>

    <div class="content">
    <div class="control"></div>

    <h2>Register <a href="/"><button><i class="ion-ios-arrow-round-back"></i> Back</button></a></h2>

    @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

    <form method="post" action="/account/create">
        @csrf

        <p><i class="ion-ios-person"></i> <input type="text" name="username" placeholder="Username"/></p>

        <p><i class="ion-ios-mail"></i> <input type="text" name="email" placeholder="E-mail"/></p>

        <p>
            <i class="ion-ios-star"></i>
            <select name="position" class="custom-select">
                <option selected disabled>Position</option>
                @foreach($privileges as $position)

                <option value="{{ $position->privilegeId }}">{{ $position->name }}</option>
                @endforeach

            </select>
        </p>

        <p><i class="ion-ios-lock"></i> <input type="password" name="password" placeholder="Password"/></p>

        <p><i class="ion-ios-lock"></i> <input type="password" name="confirmPassword" placeholder="Confirm Password"/></p>

        <p><button id="update">Save</button></p>

    </form>
</div>

@endsection

