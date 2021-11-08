<?php
require 'src/ViewHelpers/Details.php';
$testtransformer = [
    "name" => "Astrotrain",
    "size" => "16",
    "speed" => "3",
    "power" => "45",
    "disguise" => "5",
    "top_trumps_rating" => "10",
    "type" => "Insecticon",
    "img_url" => "https://static.wikia.nocookie.net/transformers/images/2/29/G1_Astrotrain.jpg"
];
$transformerdetails = new Details();
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
        <?php $transformerdetails->createTransformerDetails($testtransformer); ?>
    </div>
    <div class="text-end p-4">
        <a href="index.php">Return to home</a>
    </div>
</body>
</html>
