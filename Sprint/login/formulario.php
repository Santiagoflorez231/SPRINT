<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/Sprint/css/css.css">
    <style>
        .bg {
            background-image: url(/Sprint/img/fondo_lado.jpg);
            background-position: center center;
            background-size: cover;
        }

        body {
            background-image: url("/Sprint/img/fondoo.png");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <div class="container w-75 mt-5 rounded bg-form  shadow">
        <div class="row align-items-stretch">
            <div class="col bg">
            </div>
            <div class="col pt-5 rounded m-5">
                <h2 class="fw-bold text-center text-white py-5">Bienvenido</h2>
                <form action="" method="post">
                    <div class="mb-5 rounded">
                        <label for="" class="form-alebl text-white">Email</label>
                        <input required type="text" class="form-control" name="emailAcces">
                    </div>
                    <div class="mb-5 rounded">
                        <label for="" class="form-alebl text-white">Password</label>
                        <input required type="password" class="form-control" name="passwordAcces">
                    </div>
                    <div class="m-5">
                    <a href="../index.php" class="btn btn-primary col-12 mb-2">Acceder</a>
                    </div>
                    <div class="my-3">
                        <span class="text-white">¿No tienes cuenta? <a href="registrar.php">Registrarte</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
   

</body>

</html>