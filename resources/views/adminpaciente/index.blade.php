<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- Boxicons CDN Link -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/perfiladmin.css') }}">
</head>
<section>
    <x-nav />
</section>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Dochome</div>
            <i class='bx bx-menu' id="btn"></i>
            <br>

        </div>
        <li class="perfil">
            <img class="" src="img/adm.jpg" alt="">
            <span class="nombre">Juan Salazar</span>
        </li>
        <hr>
        <ul class="nav-list">

            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="{{ route('perfiladmin') }}">
                    <i class='bx bxs-user-circle'></i>
                    <span class="links_name">Mi Perfil</span>
                </a>
                <span class="tooltip"></span>
            </li>
            <li>
                <a href="{{ route('adminmedico') }}">
                    <i class='bx bx-pulse '></i>
                    <span class="links_name">Medicos</span>
                </a>
                <span class="tooltip"></span>
            </li>

            <li>
                <a href="{{ route('adminpaciente') }}">
                    <i class='bx bx-group'></i>
                    <span class="links_name">Pacientes</span>
                </a>
                <span class="tooltip"></span>
            </li>
            {{--  <li class="profile">
                <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li> --}}
        </ul>
    </div>
    <section class="home-section">

        <form action="{{ route('perfilmedico.store') }}" method="post">

            {{ csrf_field() }}



            <article class=" card caja ">
                <br>

                <section class=" card container-fluid cajita">
                    <div class="container-fluid  d-flex justify-content-evenly">
                        <input type="text" class="redondeado" value="">
                        <button type="submit" class=" boton btn btn-primary">Buscar</button>
                    </div>
                </section>

                <section class=" card container-fluid cajita2">
                    <section class=" card container-fluid cajas">
                        <article class="formato container-fluid">
                            <img class="imgRedonda" src="img/pac.jpg" alt="">
                            <h2>Julian martinez</h2>
                            <h2>20 años</h2>
                            <h2>1061684233</h2>
                            <h2>julianmar@gmail.com</h2>
                            <h2>hjhkjhjkhkjh</h2>


                            <button type="submit" class=" bot btn btn-danger"><i class='bx bxs-trash bx-sm '
                                    style='color:#fffdfd'></i></button>
                            <button type="submit" class=" bot btn btn-warning"><i class='bx bxs-edit bx-sm'
                                    undefined></i></button>




                        </article>

                    </section>

                </section>


            </article>
        </form>
        <br>

    </section>
    <br>
    <footer>
        <x-footer />
    </footer>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>
