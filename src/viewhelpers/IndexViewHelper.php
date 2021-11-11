<?php

namespace Transformers\viewhelpers;

require "vendor/autoload.php";

use PDO;
use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\IndexModel;
use Transformers\services\Search;

class IndexViewHelper
{
    private array $transformerList;
    private PDO $connection;

    public function __construct()
    {
        // Create db connector
        $instance = DbConnection::getinstance();
        $this->connection = $instance->getConnection();

        $this->getTransformers();
    }

    /**
     * Retrieves an array of transformers from the database
     */
    private function getTransformers()
    {
        // Hydrate the transformers array
        $transformers = Hydrator::populateIndex($this->connection);

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
        $str = '<a href="./details.php?id=' . $item['id'] . '">';
        $str .= '<div class="card text-center mx-auto mt-3 p-3" style="width: 20rem;">';
        $str .= '<img src="' . $item['img_url'] . '" alt="image of ' . $item['name'] . '" class="card-img-top" height="350">';
        $str .= '<h2 class="card-title">' . $item['name'] . '</h2>';
        $str .= '<h4>' . $item['type'] . '</h4>';
        $str .= '</div>';
        $str .= '</a>';
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

    /**
     * Filter and search transformers
     * @return string
     */
    public function searchFilterTransformers(string $search, string $filter): void
    {
        // Search
        $this->transformerList = Search::searchFilterTransformers($this->connection, $search, $filter);
    }
}