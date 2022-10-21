<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/loginadmi.css') }}">
    <link rel="stylesheet" href="img/loginadmi.jpeg">

    <title>Login Admi</title>
</head>

<body>
    <section class="fondo vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="tarjeta card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 ">

                            <h3 class="mb-5 text-center" style="color: #115679;">Iniciar sesion</h3>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeEmailX-2">Correo electronico</label>
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="typePasswordX-2">Contraseña</label>
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                            </div>

                            <div class="d-flex align-items-center justify-content-evenly pb-4">
                                <button type="button" class="bcancelar btn"
                                    style="background-color: #D4D4D4;">Cancelar</button>
                                <button type="button" class="btn"
                                    style="background-color: #10A9FF; color: white;">Iniciar sesion</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
