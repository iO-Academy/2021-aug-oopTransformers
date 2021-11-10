<?php

namespace Transformers\ViewHelpers;

use Transformers\Abstracts\Transformer;
use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;

class Details
{
    private \PDO $connection;
    private Transformer $transformer;

    public function __construct()
    {
        // Calls DB and hydrates new Transformer object.
        $instance = DbConnection::getinstance();
        $this->connection = $instance->getConnection();
    }

    private function getTransformer(int $id): void
    {
        $this->transformer = Hydrator::populateDetails($this->connection, $id);
    }

    /**
     * Method to display details using HTML/CSS for a transformer based on ID.
     */
    public function createTransformerDetails(int $id): string
    {
        // Get the transformer object base don the id
        $this->getTransformer($id);

        // Gives friendly var names to Transformer props.
        $name = $this->transformer->name;
        $size = $this->transformer->size;
        $speed = $this->transformer->speed;
        $power = $this->transformer->power;
        $disguise = $this->transformer->disguise;
        $top_trumps_rating = $this->transformer->top_trumps_rating;
        $type = $this->transformer->type;
        $img_url = $this->transformer->img_url;

        $str = "<div class='m-xl-5 m-4'>
                    <img class='transformer-details-image' src='$img_url' alt='picture of $name' />
                </div>
                <div class='transformer-details mx-5'>
                    <ul class='display-4 list-unstyled'>
                        <li>$name</li>
                        <li class='display-6'>$type</li>
                    </ul>
                    <ul class='list-unstyled fs-4'>
                        <li>Size: $size</li>
                        <li>Speed: $speed</li>
                        <li>Power: $power</li>
                        <li>Disguise: $disguise</li>
                        <li>Top Trumps Rating: $top_trumps_rating</li>
                    </ul>
                </div>";

        return $str;
    }
}
