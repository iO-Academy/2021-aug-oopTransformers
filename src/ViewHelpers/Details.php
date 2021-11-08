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
            <div>
            <h3>$name</h3>
            <h3>$size</h3>
            <h3>$speed</h3>
            <h3>$power</h3>
            <h3>$disguise</h3>
            <h3>$top_trumps_rating</h3>
            <h3>$type</h3>
            <h3>$img_url</h3>
            </div>
            ";
    }
}