<?php

namespace Transformers\viewhelpers;

require "../../vendor/autoload.php";

use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\IndexModel;

class IndexViewHelper
{
    private array $transformerList;

    public function __constructor(array $transformerList )
    {
        $instance = DbConnection::getinstance();
        $connection = $instance->getConnection();
        $transformers = Hydrator::populateIndex($connection);
        $indexmodel = new IndexModel($transformers);
        $this->transformerList = $transformerList;
    }

    public function createTransformerCard() {
        foreach ($outerArray as $item) {
            $str = '<div class="card text-center mx-auto d-block" style="width: 25rem;">';
            $str .= '<img src="' . $item['img_url'] . '" width="300">';
            $str .= '<h2>' . $item['name'] . '</h2>';
            $str .= '<h4>' . $item['type'] . '</h4>';
            $str .= '</div>';
            echo $str;
        }
    }
}