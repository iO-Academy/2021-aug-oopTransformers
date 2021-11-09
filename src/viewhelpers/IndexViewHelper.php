<?php

namespace Transformers\viewhelpers;

require "vendor/autoload.php";

use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\IndexModel;

class IndexViewHelper
{
    public array $transformerArray = [];

    public function __constructor()
    {
        $instance = DbConnection::getinstance();
        $connection = $instance->getConnection();
        $transformers = Hydrator::populateIndex($connection);

        $indexModel = IndexModel::getInstance();
        $indexModel->setTransformers($transformers);

        $this->$transformerArray = $indexModel->$transformerList;
    }

    public function createTransformerCard(array $transformerArray) {
        foreach ($transformerArray as $item) {
            $str = '<div class="card text-center mx-auto d-block mt-3 p-3" style="width: 25rem;">';
            $str .= '<img src="' . $item['img_url'] . '" width="300" height="500" class="card-img-top">';
            $str .= '<h2 class="card-title">' . $item['name'] . '</h2>';
            $str .= '<h4>' . $item['type'] . '</h4>';
            $str .= '<a href="./details.php?id=' . $item['id'] . '" class="btn btn-primary">More Info</a>';
            $str .= '</div>';
            echo $str;
        }
    }
}