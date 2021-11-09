<?php

namespace Transformers\ViewHelpers;
use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\DetailsModel;

class Details
{
    /**
     * Method to display details using HTML/CSS for a transformer based on ID.
     */
    public function createTransformerDetails($id): void {
        // Calls DB and hydrates new Transformer object.
        $instance = DbConnection::getinstance();
        $connection = $instance->getConnection();
        $hydrator = Hydrator::populateDetails($connection, $id);
        $transformer = new DetailsModel($hydrator);
        // Gives friendly var names to Transformer props.
        $name = $transformer->transformerDetails->name;
        $size = $transformer->transformerDetails->size;
        $speed = $transformer->transformerDetails->speed;
        $power = $transformer->transformerDetails->power;
        $disguise = $transformer->transformerDetails->disguise;
        $top_trumps_rating = $transformer->transformerDetails->top_trumps_rating;
        $type = $transformer->transformerDetails->type;
        $img_url = $transformer->transformerDetails->img_url;
        echo "
            <div class='m-5'>
                <img class='transformer-details-image' src='$img_url' alt='picture of $name' />
            </div>
            <div class='transformer-details m-5'>
                <h3>$name</h3>
                <h4>Type: $type</h4>
                <p>Size: $size</p>
                <p>Speed: $speed</p>
                <p>Power: $power</p>
                <p>Disguise: $disguise</p>
                <p>Top Trumps Rating: $top_trumps_rating</p>
            </div>
            ";
    }
}