<?php
require "vendor/autoload.php";

use Transformers\viewhelpers\IndexViewHelper;

$indexViewHelper = new IndexViewHelper();
// $indexViewHelper->searchTransformers('Gr');

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Transformers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/jpg" href="assets/images/autobot-logo.png"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <main class="container-fluid d-flex flex-column flex-wrap" id="homePage">
            <div class="header row d-flex">
                <h1>Transformers</h1>
            </div>

            <div class="row">

                <div class="col-lg-1 col-sm-0"></div>

                <div class="search-container col-lg-4 col-sm-12 d-flex justify-content-center">
                    <form class="pe-2">
                        <img src="assets/images/search.svg" width="25px">
                        <input type="text" placeholder="Search..."></input>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                    <a href="index.php"><button class="btn btn-primary">Clear</button></a>
                </div>

                <div class="filter-select col-lg-2 col-sm-12 form-check form-switch d-flex justify-content-center">
                    <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked></input>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Autobots</label>
                </div>

                <div class="filter-select col-lg-2 col-sm-12 form-check form-switch d-flex justify-content-center">
                    <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked></input>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Insecticons</label>
                </div>

                <div class="filter-select col-lg-2 col-sm-12 form-check form-switch d-flex justify-content-center">
                    <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked></input>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Decepticons</label>
                </div>
                <div class="col-lg-1 col-sm-0"></div>

            </div>

            <div class="card-container d-flex flex-wrap justify-content-evenly m-3">
                <?php echo $indexViewHelper->createTransformersList(); ?>
            </div>
        </main>
        <footer>
            <a href="#homePage" class="btn btn-primary">BACK TO TOP</a>
        </footer>
    </body>
</html>