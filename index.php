<?php

use Transformers\viewhelpers\IndexViewHelper;
require "vendor/autoload.php";

$indexViewHelper = new IndexViewHelper();

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
        <div class="container d-flex flex-column flex-wrap">
            <div class="header row d-flex flex-wrap">
                <h1>Transformers</h1>
            </div>

            <div class="d-flex justify-content-around">
                <div class="col-2"></div>
                <div class="search-bar col-2">
                    <img src="assets/images/search.svg" width="25px">
                    <input type="text" placeholder="Search..."></input>
                </div>

                <div class="filter-select col-2 form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked></input>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Autobots</label>
                </div>

                <div class="filter-select col-2 form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked></input>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Insecticons</label>
                </div>

                <div class="filter-select col-2 form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked></input>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Decepticons</label>
                </div>

                <div class="col-2"></div>
            </div>

            <div class="card-container">
                <?php
                $indexViewHelper->createTransformerCard();
                ?>
            </div>
        </div>
    </body>
</html>