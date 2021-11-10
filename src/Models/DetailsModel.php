<?php

namespace Transformers\Models;
use Transformers\Abstracts\Transformer;

class DetailsModel
{
    public Transformer $transformerDetails;

    public function __construct()
    {

    }

    /**
     * Setter for transformer object
     * @param Transformer $transformer
     */
    public function setTransformer(Transformer $transformer): void
    {
        $this->transformerDetails = $transformer;
    }
}