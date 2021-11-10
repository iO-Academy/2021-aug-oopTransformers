<?php

namespace Transformers\ViewHelpers\tests;
//require ('../../../vendor/autoload.php');

require_once '../IndexViewHelper.php';
//require 'PHPUnit\Framework\TestCase';
use PHPUnit\Framework\TestCase;
use Transformers\ViewHelpers\IndexViewHelper;


class IndexViewHelperTest extends TestCase
{
    /*protected static function getMethod($name)
    {
        $class = new ReflectionClass('MyClass');
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }*/

    /*public function testGetTransformers_ReturnsValidArray()
    {

//        $instance = DbConnection::getinstance();
//        $connection = $instance->getConnection();

        $class = new \ReflectionClass('Transformers\viewhelpers\IndexViewHelper');
        $method = $class->getMethod('getTransformers');
        $method->setAccessible(true);

        $indexViewHelper = new IndexViewHelper();

        // Call the method with arguments on the instance created above:
        $result = $method->invokeArgs($indexViewHelper);

        $this->assertEquals(30, count($result));
    }*/

    public function testCreateTransformersList_ReturnsValidString()
    {
        $indexViewHelper = new IndexViewHelper();
        $result = $indexViewHelper->createTransformersList();
        $this->assertStringStartsWith('<a href', $result);
    }
}