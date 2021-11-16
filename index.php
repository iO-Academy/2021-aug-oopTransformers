<?php
require "vendor/autoload.php";

use Transformers\ViewHelpers\IndexViewHelper;

$indexViewHelper = new IndexViewHelper();

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $autobots = $_GET['filter-autobot'] ?? '';
    $decepticons = $_GET['filter-decepticon'] ?? '';
    $insecticons = $_GET['filter-insecticon'] ?? '';

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $filters = [];
        if (isset($_GET['filter-autobot'])) {
            $autobots = $_GET["filter-autobot"];
            $filters[] = $_GET['filter-autobot'];
        }
        if (isset($_GET['filter-insecticon'])) {
            $insecticons = $_GET["filter-insecticon"];
            $filters[] = $_GET['filter-insecticon'];
        }
        if (isset($_GET['filter-decepticon'])) {
            $decepticons = $_GET["filter-decepticon"];
            $filters[] = $_GET['filter-decepticon'];
        }
        $filter = implode(',', $filters);
        $indexViewHelper->searchFilterTransformers($search, $filter);
    } else {
        $search = '';
    }
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>Transformers</title>
    </head>
    <body>
        <main class="d-flex flex-column flex-wrap" id="homePage">

            <nav class="form-banner">

                <form class="row justify-content-between align-items-center" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">

<!--                    <div class="col-lg-3 p-2">-->
<!--                    </div>-->

                    <div class="input-group search col-lg-3 p-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                        </div>
                        <input type="text" class="form-control" id="search" placeholder='Search...' value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>" name="search">
                    </div>

                    <div class="col-lg-6 d-flex justify-content-evenly p-2">

                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="autobot" value="autobot" name="filter-autobot" <?php if (isset($autobots) && $autobots=="autobot") echo "checked";?>>
                            <label class="form-check-label mx-1" for="autobot">Autobots</label>
                        </div>

                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="insecticon" value="insecticon" name="filter-insecticon" <?php if (isset($insecticons) && $insecticons=="insecticon") echo "checked";?>>
                            <label class="form-check-label mx-1" for="insecticon">Insecticons</label>
                        </div>

                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="decepticon" value="decepticon" name="filter-decepticon" <?php if (isset($decepticons) && $decepticons=="decepticon") echo "checked";?>>
                            <label class="form-check-label mx-1" for="decepticon">Decepticons</label>
                        </div>

                    </div>

                    <div class="col-lg-3 d-flex justify-content-evenly p-2">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="index.php"><button type="button" class="btn btn-primary">Reset</button></a>
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