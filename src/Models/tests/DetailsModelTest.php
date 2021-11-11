<?php
declare(strict_types=1);
require_once '../DetailsModel.php';
use Transformers\Models\DetailsModel;
require_once '../../Abstracts/Transformer.php';
use Transformers\Entities\Transformer;
use PHPUnit\Framework\TestCase;


class DetailsModelTest extends TestCase
{
    public function testSetTransformer_ThrowsException_GivenInvalidTypeInt()
    {
        $DetailsModel = new DetailsModel();
        $this->expectException(TypeError::class);
        $result = $DetailsModel->setTransformer(22);
    }
    public function testSetTransformer_ThrowsException_GivenInvalidTypeStr()
    {
        $DetailsModel = new DetailsModel();
        $this->expectException(TypeError::class);
        $result = $DetailsModel->setTransformer('badstr');
    }
    public function testSetTransformer_ThrowsException_GivenInvalidTypeArr()
    {
        $DetailsModel = new DetailsModel();
        $this->expectException(TypeError::class);
        $result = $DetailsModel->setTransformer(['bad', 'array']);
    }
    public function testSetTransformer_ThrowsException_GivenInvalidTypeBool()
    {
        $DetailsModel = new DetailsModel();
        $this->expectException(TypeError::class);
        $result = $DetailsModel->setTransformer(true);
    }
    public function testSetTransformer_ThrowsException_GivenInvalidTypeNull()
    {
        $DetailsModel = new DetailsModel();
        $this->expectException(TypeError::class);
        $result = $DetailsModel->setTransformer(null);
    }
    public function testSetTransformer_ThrowsException_GivenInvalidObject()
    {
        $DetailsModel = new DetailsModel();
        $stub = $this->getMockBuilder(\stdclass::class)->getMock();
        $this->expectException(TypeError::class);
        $result = $DetailsModel->setTransformer($stub);
    }
    public function testSetTransformer_GivenValidObject()
    {
        $DetailsModel = new DetailsModel();
        $stub = $this->createMock(Transformer::class);
        $result = $this->assertNull($DetailsModel->setTransformer($stub));
    }
}