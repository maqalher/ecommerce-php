<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-image: url('img/background-login.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a href="#" class="navbar-brand mx-auto">Ecommerce</a>
    </nav>

    <div class="container mx-auto" style="margin-top:15%; width: 40rem;">
        <div class="well">
            <h1 class="text-white">Inicio de sesión</h1>
            <div class="form-group">
                <input type="email" id="correo" class="form-control form-control-lg" placeholder="Correo">
            </div>
            <div class="form-group">
                <input type="password" id="pass" class="form-control form-control-lg" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary" id="login">ENTRAR</button>
        </div>
    </div>

<script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js"></script>
<script src = "https://www.gstatic.com/firebasejs/7.9.3/firebase-auth.js"> </script>
<script src="js/app.js"></script>
</body>
</html>