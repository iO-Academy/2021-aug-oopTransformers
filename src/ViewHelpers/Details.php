<?php

namespace Transformers\ViewHelpers;
use Transformers\DB\DbConnection;
use Transformers\DB\Hydrator;
use Transformers\Models\DetailsModel;

class Details
{
    public function createTransformerDetails($id): void {
        $instance = DbConnection::getinstance();
        $connection = $instance->getConnection();
        $hydrator = Hydrator::populateDetails($connection, $id);
        $transformer = new DetailsModel($hydrator);
        $name = $transformer->getDetails('name');
        $size = $transformer->getDetails('size');
        $speed = $transformer->getDetails('speed');
        $power = $transformer->getDetails('power');
        $disguise = $transformer->getDetails('disguise');
        $top_trumps_rating = $transformer->getDetails('top_trumps_rating');
        $type = $transformer->getDetails('type');
        $img_url = $transformer->getDetails('img_url');
        echo "
            <div class='m-5'>
                <img class='transformer-details-image' src='$img_url' alt='picture of $name'/>
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