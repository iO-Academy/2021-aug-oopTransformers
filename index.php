<?php
require "vendor/autoload.php";

use Transformers\ViewHelpers\IndexViewHelper;

$indexViewHelper = new IndexViewHelper();

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $trimmedSearch = trim($search);
    $rawSearch = htmlentities($trimmedSearch);
    $indexViewHelper->searchTransformers($trimmedSearch);
} else {
    $search = '';
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <main class="container-fluid d-flex flex-column flex-wrap" id="homePage">

            <div class="row d-flex align-items-center py-4 px-5 form-banner">
                <div class="form-group col-lg-6 col-sm-12 d-flex justify-content-between p-2">

                    <div class="filter-select col-lg-4 col-sm-4 form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label mx-1" for="flexSwitchCheckChecked">Autobots</label>
                    </div>

                    <div class="filter-select col-lg-4 col-sm-4 form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label mx-1" for="flexSwitchCheckChecked">Insecticons</label>
                    </div>

                    <div class="filter-select col-lg-4 col-sm-4 form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label mx-1" for="flexSwitchCheckChecked">Decepticons</label>
                    </div>

                </div>

                <div class="search-container col-lg-6 col-sm-12 d-flex justify-content-center">
                    <form class="pe-2 input-group" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                        <input type="text" class="form-control" placeholder="Seaspray" value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i><span> Search</span>
                            </button>
                        </div>
                    </form>
                    <a href="index.php"><button class="btn btn-primary">Clear</button></a>

                </div>
            </div>
            <div class="header row d-flex">
                <h1>Transformers</h1>
            </div>

            <div class="card-container d-flex flex-wrap justify-content-evenly m-3">
                <?php if (strlen($indexViewHelper->createTransformersList()) == 0) {
                    echo '<div class="card text-center mx-auto m-3 p-3 error-card">
                            <h4>No Transformers found</h4>
                            <p>(Not even in disguise)</p>
                            <img src="assets/images/transformers-optimus-prime.gif" alt="Laughing Megaton">
                            <div class="mt-3">
                            <a href="index.php" class="btn btn-primary m-top-2">Reset search</a>
                            </div>
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