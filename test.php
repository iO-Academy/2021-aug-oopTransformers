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


// echo '<pre>';
// print_r($indexmodel->transformerList);
// echo '</pre>';

$outerArray = $indexModel->transformerList;

foreach ($outerArray as $item) {
        $str = '<div class="card">';
        $str .= '<img src="' . $item['img_url'] . '">';
        $str .= '<h2>' . $item['name'] . '</h2>';
        $str .= '<h4>' . $item['type'] . '</h4>';
        $str .= '</div>';
        echo $str;
}

echo '<pre>';
var_dump($transformerList);
echo '</pre>';

$Henri = new Transformer();

$Henri = Hydrator::populateDetails($connection, 1);

echo '<pre>';
var_dump($Henri);
echo '</pre>';

