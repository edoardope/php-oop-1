<?php
include __DIR__ . '/database/database.php'

    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container-fluid p-5">
        <div class="row justify-content-around">
            <?php for ($i = 0; $i < count($movies); $i++) { ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <?php echo $movies[$i]->title ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Film type:
                            <?php echo $movies[$i]->timeCategory() ?>
                        </li>
                        <li class="list-group-item">
                            duration:
                            <?php echo $movies[$i]->duration ?> min
                        </li>
                        <li class="list-group-item">release date:
                            <?php echo $movies[$i]->date ?>
                        </li>
                        <li class="list-group-item">primary genere:
                            <?php echo $movies[$i]->genere->genere ?>
                        </li>
                        <li class="list-group-item">secondary genere:
                            <?php echo $movies[$i]->genere->secondary_genere ?>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>