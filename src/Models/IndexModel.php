<?php

namespace Transformers\Models;

class IndexModel
{
    private static ?IndexModel $instance = null;
    private array $transformerList = [];

    public static function getInstance(): IndexModel
    {
        if (!self::$instance) {
            self::$instance = new IndexModel();
        }
        return self::$instance;
    }

    public function setTransformers($transformers): void
    {
        $this->transformerList = $transformers;
    }

    public function getTransformers(): array
    {
        return $this->transformerList;
    }
}