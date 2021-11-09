<?php

/**
 * USE THIS TEST FILE WISELY, IT TOOK MANY HOURS TO CREATE.
 * Feel free to use this, but will need to be removed before final version.
 */

require "vendor/autoload.php";

use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\IndexModel;
use Transformers\Abstracts\Transformer;

$instance = DbConnection::getinstance();
$connection = $instance->getConnection();

$transformers = Hydrator::populateIndex($connection);

$indexModel = IndexModel::getinstance();
$indexModel->setTransformers($transformers);

$transformerList = $indexModel->transformerList;

echo '<pre>';
var_dump($transformerList);
echo '</pre>';

$Henri = new Transformer();

$Henri = Hydrator::populateDetails($connection, 1);

echo '<pre>';
var_dump($Henri);
echo '</pre>';