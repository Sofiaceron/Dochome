    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/perfilmedico.css') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <title>Perfil Doctor</title>

    </head>

    <body>
        <header class="opciones">

            <!-- <nav> -->
            <ul class="menu">
                <li><a href="{{ url('perfilmedico') }}">Perfil</a></li>
                <li><a href="">Agenda</a></li>
                <li><a href="">Historial Citas</a></li>
                <!-- <li><a href="">Cerrar sesion</a></li> -->
            </ul>
            <ul class="Cerrar_sesion">
                <li><a href="{{ url('http://127.0.0.1:8000') }}">Cerrar sesion</a></li>
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
                        <img src="img/doc.jpg" alt="img">
                    </article>

                    <article>
                        <h1 class="nombre_doctor">Dr. Alexander Muñoz</h1>
                    </article>

                    <article>
                        <Button type="button" class="boton"></a> Editar</Button>
                    </article>

                </section>

                <section class="contendor_link">

                    <article>
                        <img class="img_whats" src="img/Whatsapp(1).png" alt="">
                    </article>

                    <h2 class="link">Link WhatsApp</h2>

                    <input class="celda_WhatsApp" type="text">
                </section>

            </section>

            <section class="contenedor-derecho">

                <label for="Correo Electronico" class="form-label">Correo electronico</label>
                <input type="email" id="Correo Electronico" class="celdas form-input">

                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" id="contraseña" class="celdas form-input">

                <label for="sexo" class="form-label">Sexo</label>
                <input type="combo-box" id="sexo" class="celdas form-input">

                <label for="telefono" class="form-label">Telefono</label>
                <input type="number" id="telefono" class="celdas form-input">

                <label for="especialidad" class="form-label">Especialidad</label>
                <input type="text" id="especialidad" class="celdas form-input">

                <label for="valor" class="form-label">Valor consulta</label>
                <input type="text" id="valor" class="celdas form-input">

                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" id="descripcion" class="celdas form-input">

            </section>

        </section>
        <footer>
            <x-footer />
        </footer>
    </body>

    </html>
