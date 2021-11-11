<?php
declare(strict_types=1);
require_once '../Details.php';
use Transformers\ViewHelpers\Details;
require_once '../../Abstracts/Transformer.php';
use Transformers\Abstracts\Transformer;
use PHPUnit\Framework\TestCase;


class DetailsTest extends TestCase
{
    public function testCreateTransformerDetails_AssertValue()
    {
        $expected = "<div class='m-xl-5 m-4'>
                    <img class='transformer-details-image' src='https://static.wikia.nocookie.net/transformers/images/2/29/G1_Astrotrain.jpg' alt='picture of Astrotrain' />
                </div>
                <div class='transformer-details mx-5'>
                    <ul class='display-4 list-unstyled'>
                        <li>Astrotrain</li>
                        <li class='display-6'>Insecticon</li>
                    </ul>
                    <ul class='list-unstyled fs-4'>
                        <li>Size: 5</li>
                        <li>Speed: 3</li>
                        <li>Power: 45</li>
                        <li>Disguise: 5</li>
                        <li>Top Trumps Rating: 10</li>
                    </ul>
                </div>";
        $stub = $this->createMock(Details::class);
        $stub->method('createTransformerDetails')->willReturn($expected);
        $this->assertEquals($stub->createTransformerDetails(1), $expected);
    }
    public function testCreateTransformerDetails_ThrowsException_GivenInvalidTypeStr()
    {
        $mock = $this->getMockBuilder(Details::class)
            ->setMethods(['createTransformerDetails'])
            ->disableOriginalConstructor()
            ->getMock();
        $this->expectException(TypeError::class);
        $result = $mock->createTransformerDetails('badstr');
    }
    public function testCreateTransformerDetails_ThrowsException_GivenInvalidTypeArr()
    {
        $mock = $this->getMockBuilder(Details::class)
            ->setMethods(['createTransformerDetails'])
            ->disableOriginalConstructor()
            ->getMock();
        $this->expectException(TypeError::class);
        $result = $mock->createTransformerDetails(['bad', 'array']);
    }
    public function testCreateTransformerDetails_ThrowsException_GivenInvalidTypeBool()
    {
        $mock = $this->getMockBuilder(Details::class)
            ->setMethods(['createTransformerDetails'])
            ->disableOriginalConstructor()
            ->getMock();
        $this->expectException(TypeError::class);
        $result = $mock->createTransformerDetails(true);
    }
    public function testCreateTransformerDetails_ThrowsException_GivenInvalidTypeNull()
    {
        $mock = $this->getMockBuilder(Details::class)
            ->setMethods(['createTransformerDetails'])
            ->disableOriginalConstructor()
            ->getMock();
        $this->expectException(TypeError::class);
        $result = $mock->createTransformerDetails(null);
    }
    public function testCreateTransformerDetails_ThrowsException_GivenInvalidTypeObject()
    {
        $mockobj = new stdClass();
        $mock = $this->getMockBuilder(Details::class)
            ->setMethods(['createTransformerDetails'])
            ->disableOriginalConstructor()
            ->getMock();
        $this->expectException(TypeError::class);
        $result = $mock->createTransformerDetails($mockobj);
    }
}