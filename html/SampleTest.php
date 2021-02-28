<?php
use PHPUnit\Framework\TestCase;

require_once 'sample.php';

class SampleTest extends TestCase
{
    public function testNoA()
    {
        //同じ値、同じ型でない場合エラー
        $this->assertSame('2204', 2204);
    }

    public function testOkA()
    {
        //同じ値、同じ型でない場合エラー
        $this->assertSame('2204', '2204');
    }

    public function testSample()
    {
        $sample = new sample\Sample();

        //同じ値、同じ型でない場合エラー
        $this->assertSame($sample->a(), 'あ');
    }
}
