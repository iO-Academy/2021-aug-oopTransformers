<?php

namespace Transformers\ViewHelpers\tests;
require ('../../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use Transformers\ViewHelpers\IndexViewHelper;

class IndexViewHelperTest extends TestCase
{
    public function testCreateTransformersList_ReturnsValidString()
    {
        $stub = $this->createMock(IndexViewHelper::class);
        $stub->method('createTransformersList')->willReturn('<a href="./details.php?id=1">');
        $this->assertStringStartsWith('<a href', $stub->createTransformersList());
    }
}