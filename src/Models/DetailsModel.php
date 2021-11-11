<?php

namespace Transformers\Models;
use Transformers\Abstracts\Transformer;

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