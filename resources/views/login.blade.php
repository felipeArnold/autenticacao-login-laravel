<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>

    <style>

        body {
            background-color: aliceblue;
        }

        #form {
            display: flex;
            justify-content: center;
            margin-top: 12%;
        }
    </style>

    <div class="col-md-12" id="form">
        <form method="post">
            @csrf

            <div class="col-md-12 mb-4">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail">
            </div>

            <div class="col-md-12 mb-4">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" placeholder="Digite sua senha">
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
        </form>
    </div>

</body>

</html>
