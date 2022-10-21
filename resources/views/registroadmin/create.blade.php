<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/registroadmin.css') }}">
    <title>Registrarse</title>
</head>


<body>
    <section class="fondo" style="width: 100%; height: 70%;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                    <div class="tarjeta card " style="border-radius: 1rem;">
                        <div class="card-body p-5 ">

                            <h5>Crear cuenta</h5>
                            <div class="d-flex justify-content-stretch mb-4">
                                <p>¿Ya tienes creada una cuenta?</p>
                                <p style="color: #115679;"> Iniciar sesion</p>
                            </div>
                            <form action="{{ route('registroadmin.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="Correoelectronico">Correo electronico</label>
                                            <input type="email" id="Correoelectronico" class="form-control"
                                                name="correo" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="Contraseña">Contraseña</label>
                                            <input type="password" id="Contraseña" class="form-control"
                                                name="password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="Confirmarcontraseña">Nombres y
                                                apellidos</label>
                                            <input type="text" id="Confirmarcontraseña" class="form-control"
                                                name="nombres_y_apellidos" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="Cedula">Cedula</label>
                                            <input type="number" id="Cedula" class="form-control" name="cedula" />
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div
                                    class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-evenly pb-4">
                                    <button type="submit" class="bcancelar btn"
                                        style="background-color: #D4D4D4;">Cancelar</button>
                                    <button type="submit" class="btn"
                                        style="background-color: #10A9FF; color: white;">Continuar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
