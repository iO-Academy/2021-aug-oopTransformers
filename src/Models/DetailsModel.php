<?php

namespace Transformers\Models;
use Transformers\Entities\Transformer;

class DetailsModel
{
    private Transformer $transformerDetails;

    /**
     * Setter for transformer object
     * @param Transformer $transformer
     */
    public function setTransformer(Transformer $transformer): void
    {
        $this->transformerDetails = $transformer;
    }
}