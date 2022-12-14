<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocHome</title>
    <link rel="stylesheet" href="{{ asset('css/paginap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>

    <header>
        <section class="centrar">
            <br>
            <section class="logo">
                <h2>DocHome</h2>
                <br><br>
            </section>
            <nav class="menu-principal">
                <ul class="menu1">
                    <li><a href="{{ url('http://127.0.0.1:8000') }}">Inicio</a></li>
                    <li><a href="{{ route('medico') }}">Medicos</a></li>
                    <li><a href="">Nosotros</a></li>
                    <li><a href="">Registrarse</a>
                        <ul class="submenu">
                            <li><a href="{{ route('registromedico') }}">Medico</a></li>
                            <li><a href=" {{ route('registropaciente') }}">Paciente</a></li>
                            <li><a href=" {{ route('registroadmin') }} ">Admin</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </section>
        <section class="centrar">
            <article class="encabezado">
                <h4 class="subtitulo"></h4>

                <h1 class="titulo-principal">Proyecto DocHome</h1>
                <hr>
                <p class="descripcion">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis soluta necessitatibus
                    blanditiis. Voluptatibus quod atque excepturi voluptas culpa maiores alias. Quis perspiciatis
                    eaque
                    labore repellendus tenetur necessitatibus voluptates facilis earum!
                </p>
                <br>
                <button> <a class=" bot " href="{{-- {{ route('Login1') }} --}}"> Iniciar sesion
                    </a></button>
            </article>


        </section>
    </header>
    <br>
    <br>



    <section class=" elegir ">
        <article class="  centrar">

            <article class="derecha ">
                <h4 class="-naranja"></h4><br>
                <article class="">
                    <h1 class="texto">??Por qu?? elegirnos?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque laborum earum quos quam,
                        perferendis suscipit. Commodi maiores dolorem necessitatibus illum ratione reiciendis corporis
                        at, similique minus eligendi, nesciunt impedit et.</p>

                    <br>
                    <section id="container" class="opciones">
                        <article class="opcion">
                            <img src="img/seguro-de-vida.png" class="img-opciones" alt="">
                            <h4 class="texto-opciones">Te brindamos seguridad</h4>
                        </article>

                        <article class="opcion">
                            <img src="img/doctor.png" class="img-opciones" alt="">
                            <h4 class="texto-opciones">Atenci??n</h4>
                        </article>

                        <article class="opcion">
                            <img src="img/apreton-de-manos.png" class="img-opciones" alt="">
                            <h4 class="texto-opciones">Comprometidos</h4>
                        </article>

                        <article class="opcion">
                            <img src="img/comercio-justo.png" class="img-opciones" alt="">
                            <h4 class="texto-opciones">Responsables</h4>
                        </article>
                    </section>
                </article>
            </article>
    </section>


    <section class="servicios ">
        <br>
        <article class="centrarr ">
            <h1>Nuestros servicios</h1>
        </article>
        <br>
        <section id="container" class="contenedores">

            <section class="contenidos">
                <img src="img/pago-en-efectivo1.png" class="img-servicios" alt="">
                <h4 class="titulo-servicios">Metodos de pago</h4>
                <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque quae
                    quos
                    voluptas, minus accusamus veritatis numquam ea error sequi modi? Autem nostrum libero.</p>
            </section>

            <section class="contenidos">
                <img src="img/certificado-medico (1).png" class="img-servicios" alt="">
                <h4 class="titulo-servicios">Doctores verificados y certificados</h4>
                <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque quae
                    quos
                    voluptas, minus accusamus veritatis numquam ea error sequi modi? Autem nostrum libero.</p>
            </section>

            <section class="contenidos">
                <img src="img/verificado.png" class="img-servicios" alt="">
                <h4 class="titulo-servicios">Seguridad</h4>
                <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque quae
                    quos
                    voluptas, minus accusamus veritatis.</p>
            </section>

            <section class="contenidos">
                <img src="img/transformar.png" class="img-servicios" alt="">
                <h4 class="titulo-servicios">Variedad de doctores</h4>
                <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque quae
                    quos
                    voluptas, minus accusamus veritatis.</p>
            </section>
        </section>
    </section>
    <footer>
        <br>
        <article class="Contact">

            <h1>Contactanos</h1>
        </article>

        <hr class="one_hr">

        <article class="box">

            <article class="description">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium explicabo similique quia neque
                    quisquam, quis totam error maxime impedit enim vero vitae libero odit provident labore veritatis
                    tempora tenetur quaerat!</p>
            </article>

            <article class="search_me">
                <article class="icon d-flex">
                    <img src="img/icon_whatsapp.png" alt="img" width="10%" height="10%">
                    <p>WHATSAPP:306487090</p>
                </article>
                <article class="icon d-flex">
                    <img src="img/icon_instagram.png" alt="img" width="10%" height="10%">
                    <P>INSTAGRAM:Instagram/DocHome.com</P>
                </article>
                <article class="icon d-flex">
                    <img src="img/icon_facebook.png" alt="img" width="10%" height="10%">
                    <p>FACEBOOK:Facebook/DocHome.com</p>
                </article>
            </article>

        </article>


        <hr class="two_hr">

        <article class="Rights">
            <p>Todos los derechos reservados (c) - Creado por aprendicez ADSI 2338357</p>
        </article>

    </footer>

</body>


</html>
