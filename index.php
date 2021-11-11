<?php
require "vendor/autoload.php";

use Transformers\viewhelpers\IndexViewHelper;

$indexViewHelper = new IndexViewHelper();

$decepticons = 'decepticon';
$autobots = 'autobot';
$insecticons = 'insecticon';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET['search'])) {
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
        <title>Transformers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/jpg" href="assets/images/autobot-logo.png"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <main class="container-fluid d-flex flex-column flex-wrap" id="homePage">

            <nav class="row d-flex align-items-center py-2 px-lg-5 px-sm-1 form-banner justify-content-between">

                <form class="row input-group" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">

                    <div class="col-lg-4 mx-auto my-sm-5">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-search"></i></div>
                            <label for="search" class="invisible"></label>
                            <input type="text" class="form-control" id="search" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>" name="search">
                        </div>
                    </div>

                    <div class="filter-select col-lg-2 col-md-4 col-sm-4 my-auto form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" value="autobot" name="filter-autobot" <?php if (isset($autobots) && $autobots=="autobot") echo "checked";?>>
                        <label class="form-check-label mx-1" for="flexSwitchCheckChecked">Autobots</label>
                    </div>

                    <div class="filter-select col-lg-2 col-md-4 col-sm-4 my-auto form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" value="insecticon" name="filter-insecticon" <?php if (isset($insecticons) && $insecticons=="insecticon") echo "checked";?>>
                        <label class="form-check-label mx-1" for="flexSwitchCheckChecked">Insecticons</label>
                    </div>

                    <div class="filter-select col-lg-2 col-md-4 col-sm-4 my-auto form-check form-switch d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input" id="flexSwitchCheckChecked" value="decepticon" name="filter-decepticon" <?php if (isset($decepticons) && $decepticons=="decepticon") echo "checked";?>>
                        <label class="form-check-label mx-1" for="flexSwitchCheckChecked">Decepticons</label>
                    </div>

                    <div class="col-lg-1 col-md-6 col-sm-6 my-auto">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                    <div class="col-lg-1 col-md-6 col-sm-6 my-auto">
                        <a href="index.php"><button class="btn btn-primary">Reset</button></a>
                    </div>

                </form>
            </nav>

            <div class="header row d-flex">
                <h1>Transformers</h1>
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