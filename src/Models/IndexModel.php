<?php

namespace Transformers\Models;

class IndexModel
{
    private static ?IndexModel $instance = null;

    public array $transformerList = [];

    public static function getInstance(): IndexModel
    {
        if (!self::$instance) {
            self::$instance = new IndexModel();
        }
        return self::$instance;
    }

    public function setTransformers($transformers)
    {
        $this->transformerList = $transformers;
    }
}