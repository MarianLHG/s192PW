<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar{
            background-color: #E3FEF7;
            height: 60px;
            margin: 20px;
            border-radius: 16px;
            padding: 0.3rem;
        }
        .navbar-brand, .offcanvas-title{
            font-weight: 500;
            color: #003C43;
            font-size: 24px;
            transition: 0.3s color;
        }
        .login-button{
            background-color: #135D66;
            color: white;
            font-size: 10px;
            padding: 8px 20px;
            border-radius: 50px;
            text-decoration: none;
            transition: 0.3s background-color;
        }
        .login-button:hover{
            background-color: #003C43;

        }
        .navbar-toggler{
            border: none;
            font-size: 1.25rem;
        }
        .navbar-toggler:focus, .btn-close:focus{
            box-shadow: none;
            outline: none;
        }
        .nav-link{
            color: #135D66;
            font-weight: 500;
            position: relative;
        }
        .nav-link:hover,.nav-link:active{
            color: #003C43;
        }
        @media (min-width: 991px){
        .nav-link::before{
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 2px;
            background-color: #77B0AA;
            visibility: hidden;
            transition: 0.3s ease-in-out;
        }
        .nav-link:hover::before, .nav-link.active::before{
            width: 100%;
            visibility: visible;

        }
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#">Turista sin mapas</a>
    
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Turista sin mapas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Vuelos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Hoteles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Cuenta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Contacto</a>
            </li>
            </ul>
        </div>
        </div>
        <a href="#" class="login-button">Login</a>
        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>