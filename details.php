<?php
require 'ViewHelpers/Details.php';
$testtransformer = [
    "name" => "Astrotrain",
    "size" => "16",
    "speed" => "3",
    "power" => "45",
    "disguise" => "5",
    "top_trumps_rating" => "10",
    "type" => "Insecticon",
    "img_url" => "https://static.wikia.nocookie.net/transformers/images/2/29/G1_Astrotrain.jpg/revision/latest?cb=20210729093307"
];
$transformerdetails = new Details();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details</title>
</head>
<body>
<?php $transformerdetails->createTransformerDetails($testtransformer); ?>
</body>
</html>