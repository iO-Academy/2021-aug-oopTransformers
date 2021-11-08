<?php

class Details
{
    public function createTransformerDetails($transformer): void {
//            print_r($transformer);
        $name = $transformer["name"];
        $size = $transformer["size"];
        $speed = $transformer["speed"];
        $power = $transformer["power"];
        $disguise = $transformer["disguise"];
        $top_trumps_rating = $transformer["top_trumps_rating"];
        $type = $transformer["type"];
        $img_url = $transformer["img_url"];
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