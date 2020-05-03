<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-store :: Dashboard</title>

    <link rel="shortcut icon" href="images/favicon.png"/>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('css/ion-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/myapp.css') }}"/>

    <script src="{{ asset('js/jquery.js')}}"> </script>
    <script src="{{ asset('js/myapp.js')}}"> </script>
</head>

<body>
<section class="App">
    <section class="headbar">
        <div class="logobar">
            <img src="images/logo.png" width="50" height="50" alt=""/> E-STORE <span class="hr"></span>
        </div>

        <div class="statica">
            <a href="register.html"><i class="ion-ios-person"></i> Register Users</a>
            <a href="login.blade.php"><i class="ion-ios-log-out"></i> Sign Out</a>
        </div>
    </section>

    <section class="sidebar">
        <div class="userbar">
            <a href="account.html">
                <img src="{{asset('images/avatar.png')}}" width="50" height="50" alt=""/>
                <span class="user">Samson Orode</span>
                <span class="role">Manager</span>
            </a>
        </div>

        <nav>
            <ul>
                <a href="index"><li class="focus"><i class="ion-ios-menu"></i> Dashboard</li></a>
                <a href="/stocks/index"><li><i class="ion-ios-checkbox"></i> Stock's</li></a>
                <a href="requests"><li><i class="ion-ios-basket"></i> Requisitions</li></a>
                <a href="/measurements/index"><li><i class="ion-ios-basket"></i> Measurements</li></a>
                <a href="reports"><li><i class="ion-ios-pie"></i> Reports</li></a>
                <a href="login"><li><i class="ion-ios-person"></i> Sign Out</li></a>
            </ul>
        </nav>
    </section>

    <section class="mainbar">
        <div class="postbar" style="background: url(asset{{('images/headerbg-1.jpg')}}); background-size: auto;background-size: cover"></div>

       @yield('content');
    </section>
</section>
</body>
</html>
