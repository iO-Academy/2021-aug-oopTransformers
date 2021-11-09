<?php

namespace Transformers\Models;
use Transformers\Abstracts\Transformer;

class DetailsModel
{
    private Transformer $transformerDetails;

    public function __construct(Transformer $transformer)
    {
        $this->transformerDetails = $transformer;
    }

    public function getDetails(string $field) : string {
        return get_object_vars($this->transformerDetails)[$field];
    }
}