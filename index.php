<?php
require "vendor/autoload.php";

use Transformers\ViewHelpers\IndexViewHelper;

$indexViewHelper = new IndexViewHelper();

if (isset($_GET['search'])) {
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
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/jpg" href="assets/images/autobot-logo.png"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <title>Transformers</title>
    </head>
    <body>
        <main class="d-flex flex-column flex-wrap" id="homePage">

            <nav class="px-lg-5 px-sm-1 form-banner">

                <form class="row d-flex" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">

                    <div class="col-lg-6 col-sm-12 mx-auto my-4">
                        <div class="input-group px-4">
                            <div class="input-group-text"><i class="bi bi-search"></i></div>
                            <label for="search" class="invisible"></label>
                            <input type="text" class="form-control" id="search" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>" name="search">
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-evenly px-5">
                        <div class="col-lg-1 col-md-6 col-sm-6 d-flex justify-content-center">
                            <button class="m-4 btn btn-primary" type="submit">Submit</button>
                        </div>

                        <div class="col-lg-1 col-md-6 col-sm-6 d-flex justify-content-around">
                            <a href="index.php"><button type="button" class="my-4 btn btn-primary">Reset</button></a>
                        </div>
                    </div>

                </form>
            </nav>

            <div class="header row d-flex">
                <h1>Transformers</h1>
            </div>

            <div class="card-container d-flex flex-wrap justify-content-evenly m-3">
                <?php if (strlen($indexViewHelper->createTransformersList()) == 0) {
                    echo '<div class="card text-center mx-auto m-3 p-3 error-card">
                            <h4>No Transformers found</h4>
                            <p>(Not even in disguise)</p>
                            <img src="assets/images/transformers-optimus-prime.gif" alt="Transformer gif">
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