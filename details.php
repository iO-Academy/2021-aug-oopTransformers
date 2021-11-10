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
    <title>Transformer Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/d9cf2b67c4.js" crossorigin="anonymous"></script>
</head>
<body>
<h2 class="text-center">Transformers</h2>
<div>
    <div class="details-container d-flex flex-column flex-md-row justify-content-center align-items-center m-auto mh-60">
        <?php echo $transformer->createTransformerDetails($id); ?>
    </div>
</div>
<div class="text-lg-end text-center p-lg-4 mt-lg-5 me-lg-5">
    <a href="index.php" class="home-button text-decoration-none">Return to Home <i class="fas fa-home"></i></a>
</div>
</body>
</html>