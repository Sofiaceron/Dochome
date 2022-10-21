    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/perfilpaciente.css">
        <title>Perfil paciente</title>
    </head>

    <body>
        <header class="opciones">

            <!-- <nav> -->
            <ul class="menu">
                <li><a href="{{ url('perfilpaciente') }}">Perfil</a></li>
                <li><a href="">Agenda</a></li>
                <li><a href="">Historial Citas</a></li>
                <!-- <li><a href="">Cerrar sesion</a></li> -->
            </ul>
            <ul class="Cerrar_sesion justify-content-end">
                <li><a href="{{ url('http://127.0.0.1:8000') }} ">Cerrar sesion</a></li>
            </ul>

            <!-- </nav>         -->
            <!-- <p>Agenda</p>
            <p>Historial Citas</p>
            <p>Cerrar Cesion</p> -->
        </header>

        <section class="contenedor_fondo">
            <section class="contenedor_izquierdo">
                <section class="contenedor_foto">

                    <article>
                        <img src="" alt="img">
                    </article>

                    <article>
                        <h1 class="nombre_paciente">Julian Muñoz</h1>
                    </article>

                    <article>
                        <Button type="button" class="boton"></a> Editar</Button>
                    </article>

                </section>

            </section>

            <section class="contenedor-derecho">

                <label for="Correo Electronico" class="form-label">Correo electronico</label>
                <input type="email" id="Correo Electronico" class="celdas form-input">

                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" id="contraseña" class="celdas form-input">

                <article class="edad_sexo">
                    <article class="edad_sexo2">

                        <label for="edad" class="E-form-label">Edad</label>
                        <input type="number" id="edad" class="celdas form-input">

                    </article>
                    <article class="edad_sexo2">

                        <label for="sexo" class="E-form-label">Sexo</label>
                        <input type="text" id="sexo" class="celdas form-input">

                    </article>
                </article>
                <label for="cedula" class="form-label">Cedula</label>
                <input type="number" id="cedula" class="celdas form-input">

                <label for="telefono" class="form-label">Telefono</label>
                <input type="number" id="telefono" class="celdas form-input">

                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" id="direccion" class="celdas form-input">

                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" id="descripcion" class="celdas form-input">


            </section>

        </section>
        <br>
    </body>
   
    <footer>
        <x-footer />
    </footer>
    </html>
