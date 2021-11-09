<?php

namespace Transformers\Models;

class IndexModel
{
    public array $transformerList = [];

    public function __construct(array $transformers)
    {
        $this->transformerList = $transformers;
    }
}