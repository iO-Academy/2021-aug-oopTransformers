<?php
require 'vendor/autoload.php';

use Transformers\ViewHelpers\Details;

// Check if user was sent here with a GET. Assign id var if true, return to index if false.
$id = 0;
(isset($_GET['id'])) ? $id = $_GET['id'] : header('Location: index.php');
$transformer = new Details();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/jpg" href="assets/images/autobot-logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <title>Transformer Details</title>
</head>
<body class="details-body">

    <h1 class="text-center mt-2">Transformers</h1>

    <div>
        <div class="details-container d-flex flex-column flex-md-row justify-content-center align-items-center mx-auto">
            <?php echo $transformer->createTransformerDetails($id); ?>
        </div>
    </div>

    <footer class="d-flex justify-content-center my-4">
        <a href="index.php" class="btn btn-primary"><i class="bi bi-house-door-fill"></i> Home</a>
    </footer>

</body>
</html>