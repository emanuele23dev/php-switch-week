<!doctype html>
<html lang="en">

<head>
    <title>Php Set Week</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="icon" href="./Elephpant.svg">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <nav
            class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand ms-3" href="#"><img class="elephant" src="./Elephpant.svg" alt="logo-php"></a>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Set Week</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">Php Doc <span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input
                        class="form-control me-sm-2"
                        type="text"
                        placeholder="Search" />
                    <button class="btn btn-outline-light my-2 my-sm-0 me-3" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>

    </header>

    <main>

        <h1 class="text-center mt-5 mb-4">Switch Set Week</h1>

        <div class="text-center mt-5">
            <?php

            $day_of_the_week = date('l');

            // echo $day_of_the_week

            switch ($day_of_the_week) {
                case 'Monday':
                    echo 'Iniziamo bene la settimana studiando <strong>Php</strong>';
                    echo '<img src="./images/php.jpg" alt="ctr" class="edit">';
                    break;
                case 'Tuesday':
                    echo 'Martedì focalizzati su <strong>MySql</strong>';
                    echo '<img src="./images/mysql.jpg" alt="ctr" class="edit">';
                    break;
                case 'Wednesday':
                    echo 'Di Mercoledì ci si diverte con <strong>React</strong>';
                    echo '<img src="./images/react.jpg" alt="ctr" class="edit">';

                    break;
                case 'Thursday':
                    echo 'Giovedì ripassiamo <strong>Bootstrap</strong>';
                    echo '<img src="./images/boot.jpg" alt="ctr" class="edit">';

                    break;
                case 'Friday':
                    echo 'Venerdì giretto in bici e caffettino al bar';
                    echo '<img src="./images/caffè.jpg" alt="ctr" class="edit">';

                    break;
                case 'Saturday':
                    echo 'Di Sabato si pulisce casa, poi si gioca con i gattoni e poi un pò di <strong>Crash Team Reacing</strong>';
                    echo '<img src="./images/ctr.png" alt="ctr" class="edit">';
                    break;
                case 'Sunday':
                    echo 'La Domenica, tempo permettendo, si pranza in famiglia e poi un bel giretto in bici';
                    echo '<img src="./images/ebike.jpg" alt="ctr" class="edit">';
                    break;
                default:
                    echo 'Invalid day of the week!';
            }


            ?>
        </div>



    </main>

    <footer>
        <div class='d-flex align-items-center justify-content-center'>
            <img class="elephant" src="./Elephpant.svg" alt="logo-php">
            <p><strong>Php</strong> 2024</p>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>