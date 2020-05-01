<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-store :: Login</title>

    <link rel="shortcut icon" href="images/favicon.png"/>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/ion-icon.min.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/myapp.css"/>

    <script src="js/jquery.js"> </script>
    <script src="js/myapp.js"> </script>
</head>

<body>
    <section class="App">
        <div class="overlay" id="cover-bg"></div>
        <div class="login">
            <h2>Login to <span>Store</span> </h2>

            <form action="index.blade.php" method="post">
                <p><i class="ion-ios-person"></i> <input type="text" name="" placeholder="Username"/></p>

                <p><i class="ion-ios-lock"></i> <input type="password" name="" placeholder="Password"/></p>

                <p><button><span class="io-ios-finger"></span> Login</button></p>
            </form>
        </div>
    </section>
</body>
</html>
