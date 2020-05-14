<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-store :: Dashboard</title>

    <link rel="shortcut icon" href="/images/favicon.png"/>

    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/ion-icon.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.css" />
    <link rel="stylesheet" href="/css/myapp.css"/>

    <script src="/js/jquery.js"> </script>
    <script src="/js/myapp.js"> </script>
</head>

<body>
<section class="App">
    <section class="headbar">
        <div class="logobar">
            <img src="/images/logo.png" width="50" height="50" alt=""/> E-STORE <span class="hr"></span>
        </div>

        <div class="statica">
            <a href="/account"><i class="ion-ios-person"></i> Register Users</a>
            <a href="/logout"><i class="ion-ios-log-out"></i> Sign Out</a>
        </div>
    </section>

    <section class="sidebar">
        <div class="userbar">
            <a href="/profile">
                <img src="/images/avatar.png" width="50" height="50" alt=""/>
            <span class="user">{{ auth()->user()->name }}</span>
                <span class="role">{{ auth()->user()->privilege->name }}</span>
            </a>
        </div>

        <nav>
            <ul>
                <a href="/"><li{!! Request::is('/') ? ' class="focus"' : '' !!}><i class="ion-ios-menu"></i> Dashboard</li></a>
                <a href="/stocks"><li{!! Request::is('stocks') ? ' class="focus"' : '' !!}><i class="ion-ios-checkbox"></i> Stock's</li></a>
                <a href="/requests"><li{!! Request::is('requests') ? ' class="focus"' : '' !!}><i class="ion-ios-basket"></i> Requisitions</li></a>
                <a href="/reports"><li{!! Request::is('reports') ? ' class="focus"' : '' !!}><i class="ion-ios-pie"></i> Reports</li></a>
                <a href="/login"><li><i class="ion-ios-person"></i> Sign Out</li></a>
            </ul>
        </nav>
    </section>

    <section class="mainbar">

       @yield('content');

    </section>
</section>
</body>
</html>