<?php

namespace Transformers\Abstracts;

require "vendor/autoload.php";

use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\IndexModel;
use Transformers\Abstracts\Transformer;

class IndexViewHelper
{
    $testinstance = DbConnection::getinstance();
    $connection = $testinstance->getConnection();

    $hydrator = Hydrator::populateIndex($connection);

    $indexmodel = new IndexModel($hydrator);

    echo '<pre>';
    var_dump($indexmodel);
    echo '</pre>';
}