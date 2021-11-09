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

$indexmodel = new IndexModel($hydrator);

// echo '<pre>';
// print_r($indexmodel->transformerList);
// echo '</pre>';

$outerArray = $indexmodel->transformerList;

foreach ($outerArray as $item) {
        $str = '<div class="card">';
        $str .= '<img src="' . $item['img_url'] . '">';
        $str .= '<h2>' . $item['name'] . '</h2>';
        $str .= '<h4>' . $item['type'] . '</h4>';
        $str .= '</div>';
        echo $str;
}
