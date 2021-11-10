<?php

namespace Transformers\Models;
use Transformers\Abstracts\Transformer;

class DetailsModel
{
    public Transformer $transformerDetails;

    public function __construct(Transformer $transformer)
    {
        $this->transformerDetails = $transformer;
    }
}