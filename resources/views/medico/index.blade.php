<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/medicos.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js"
        integrity="sha512-5m2r+g00HDHnhXQDbRLAfZBwPpPCaK+wPLV6lm8VQ+09ilGdHfXV7IVyKPkLOTfi4vTTUVJnz7ELs7cA87/GMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Medicos</title>
</head>

<body>
    <Header>
        <P>Cerrar sesion</P>
    </Header>

    <br>

    <Section class="body_major">
        <Section class="title">
            <h1 class="p">E S P E C I A L I D A D E S</h1>
        </Section>


        <section class="search">

            <input class="form-control " type="text" placeholder="Buscar">
            <button type="button" class="btn " style="background-color: #10A9FF; color: white;">Buscar</button>

        </section>

        <section class="cards">

            <article class="card">
                <img src="..." class="card-img-top " alt="img">
                <article class="card-body">
                    <p class="titulation">Psicologo</p>
                    <h5 class="card_title">Dr. Sebastian Hernandez</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                        ipsam laudantium ducimus perspiciatis doloremque illum natus impedit illo, porro debitis
                        quibusdam pariatur veritatis omnis quo distinctio, quia hic est ex.</p>
                    <article class="worth">
                        <p>
                            Valor consulta
                        </p>
                        <p>
                            $5000
                        </p>
                    </article>
                    <a href="#" class="btn" style="background-color: #10A9FF; color: white;">Ver calendario</a>
                </article>
            </article>

            <article class="card">
                <img src="..." class="card-img-top " alt="img">
                <article class="card-body">
                    <p class="titulation">Psicologo</p>
                    <h5 class="card_title">Dr. Sebastian Hernandez</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                        ipsam laudantium ducimus perspiciatis doloremque illum natus impedit illo, porro debitis
                        quibusdam pariatur veritatis omnis quo distinctio, quia hic est ex.</p>
                    <article class="worth">
                        <p>
                            Valor consulta
                        </p>
                        <p>
                            $5000
                        </p>
                    </article>
                    <a href="#" class="btn " style="background-color: #10A9FF; color: white;">Ver calendario</a>
                </article>
            </article>

            <article class="card">
                <img src="..." class="card-img-top " alt="img">
                <article class="card-body">
                    <p class="titulation">Psicologo</p>
                    <h5 class="card_title">Dr. Sebastian Hernandez</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                        ipsam laudantium ducimus perspiciatis doloremque illum natus impedit illo, porro debitis
                        quibusdam pariatur veritatis omnis quo distinctio, quia hic est ex.</p>
                    <article class="worth">
                        <p>
                            Valor consulta
                        </p>
                        <p>
                            $5000
                        </p>
                    </article>
                    <a href="#" class="btn" style="background-color: #10A9FF; color: white;" >Ver calendario</a>
                </article>
            </article>

        </section>
        <br>
    </Section>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
