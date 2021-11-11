<?php

/**
 * USE THIS TEST FILE WISELY, IT TOOK MANY HOURS TO CREATE.
 */

require "vendor/autoload.php";

use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\IndexModel;
use Transformers\Abstracts\Transformer;


$testinstance = DbConnection::getinstance();
$connection = $testinstance->getConnection();

$hydrator = Hydrator::populateIndex($connection);

// $indexmodel = new IndexModel($hydrator);

$indexModel = IndexModel::getInstance();
$indexModel->setTransformers($hydrator);

// echo '<pre>';
// var_dump($indexModel->transformerList);
// echo '</pre>';

// $outerArray = $indexmodel->transformerList;

echo '<pre>';
var_dump($outerArray);
echo '</pre>';

// $Henri = new Transformer();

// $Henri = Hydrator::populateDetails($connection, 1);

// echo '<pre>';
// var_dump($Henri);
// echo '</pre>';