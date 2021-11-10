<?php
require 'vendor/autoload.php';
use Transformers\ViewHelpers\Details;
// Check if user was sent here with a GET. Assign id var if true, return to index if false.
(isset($_GET['id'])) ? $id = $_GET['id'] : header('Location: index.php');
$transformer = new Details();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h2 class="text-center">Transformers</h2>
    <div class="details-container d-flex justify-content-center align-items-center mx-4">
        <?php $transformer->createTransformerDetails($id); ?>
    </div>
    <div class="text-end p-4">
        <a href="index.php">Return to home</a>
    </div>
</body>
</html>
