<?php
require "vendor/autoload.php";

use Transformers\viewhelpers\IndexViewHelper;

$indexViewHelper = new IndexViewHelper();

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $indexViewHelper->searchTransformers($search);
} else {
    $search = '';
}

//Test filters:
if(isset($_GET['insecticons'])) {
    $indexViewHelper->filterInsecticons();
}
elseif(isset($_GET['autobots'])) {
    $indexViewHelper->filterAutobots();
}

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

                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                    <div class="filter-select col-lg-2 col-sm-12 form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" name="autobots" checked></input>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Autobots</label>
                    </div>

                    <div class="filter-select col-lg-2 col-sm-12 form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" name="insecticons" checked></input>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Insecticons</label>
                    </div>

                    <div class="filter-select col-lg-2 col-sm-12 form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" name="decepticons" checked></input>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Decepticons</label>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search"></i><span> Apply Filter</span>
                    </button>
                </form>

                <div class="search-container col-lg-4 col-sm-12 d-flex justify-content-center">
                    <form class="pe-2 input-group" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                        <input type="text" class="form-control" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i><span> Search</span>
                            </button>
                        </div>
                    </form>
                    <a href="index.php"><button class="btn btn-primary">Clear</button></a>

                <div class="col-lg-1 col-sm-0"></div>

                </div>

            </div>

            <div class="card-container d-flex flex-wrap justify-content-evenly m-3">
                <?php if (strlen($indexViewHelper->createTransformersList()) == 0) {
                    echo '<div class="card text-center mx-auto mt-3 p-3" style="width: 20rem;">
                            <h4>No results found</h4>
                            <img src="assets/images/megatron.gif" alt="Laughing Megaton">
                            </div>';
                } else {
                    echo $indexViewHelper->createTransformersList();
                } ?>
            </div>
        </main>
        <footer>
            <a href="#homePage" class="btn btn-primary">BACK TO TOP</a>
        </footer>
    </body>
</html>