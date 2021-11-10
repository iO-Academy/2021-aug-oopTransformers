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

        $str = "<div class='m-5'>";
        $str .= "<img class='transformer-details-image' src='$img_url' alt='picture of $name' />";
        $str .= "</div>";
        $str .= "<div class='transformer-details m-5'>";
        $str .= "<h3>$name</h3>";
        $str .= "<h4>Type: $type</h4>";
        $str .= "<p>Size: $size</p>";
        $str .= "<p>Speed: $speed</p>";
        $str .= "<p>Power: $power</p>";
        $str .= "<p>Disguise: $disguise</p>";
        $str .= "<p>Top Trumps Rating: $top_trumps_rating</p>";
        $str .= "</div>";

        return $str;
    }
}
