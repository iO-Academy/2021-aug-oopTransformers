<?php

namespace Transformers\viewhelpers;

require "vendor/autoload.php";

use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\IndexModel;

class IndexViewHelper
{
    private array $transformerList;

    public function __construct()
    {
        $this->getTransformers();
        $this->createTransformersList();
    }

    /**
     * Retrieves an array of transformers from the database
     */
    private function getTransformers()
    {
        // Create db connector
        $instance = DbConnection::getinstance();
        $connection = $instance->getConnection();

        // Hydrate the transformers array
        $transformers = Hydrator::populateIndex($connection);

        // Get IndexModel instance and pass in transformers
        $indexModel = IndexModel::getInstance();
        $indexModel->setTransformers($transformers);

        $this->transformerList = $indexModel->transformerList;
    }

    /**
     * Creates a html string with an individual Transformer card
     * @param array $item
     * @return string
     */
    private function createTransformerCard(array $item): string
    {
        $str = '<div class="card text-center mx-auto d-block mt-3 p-3" style="width: 25rem;">';
        $str .= '<img src="' . $item['img_url'] . '" width="300" height="500" class="card-img-top">';
        $str .= '<h2 class="card-title">' . $item['name'] . '</h2>';
        $str .= '<h4>' . $item['type'] . '</h4>';
        $str .= '<a href="./details.php?id=' . $item['id'] . '" class="btn btn-primary">More Info</a>';
        $str .= '</div>';
        return $str;
    }

    /**
     * Creates a html string with all Transformers cards
     * @return string
     */
    public function createTransformersList(): string
    {
        $str = "";
        foreach ($this->transformerList as $item) {
            $str .= $this->createTransformerCard($item);
        }
        return $str;
    }
}