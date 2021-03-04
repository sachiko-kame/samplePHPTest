<?php
use PHPUnit\Framework\TestCase;

require_once 'simple/sample.php';

class SampleTest extends TestCase
{
    /**
     *  @covers sample\Sample::a
     **/
    public function testA()
    {
        $sample = new sample\Sample();

        //同じ値、同じ型でない場合エラー
        $this->assertSame($sample->a(), 'あ');
    }

    /**
     *  @covers sample\Sample::i
     **/
    public function testI()
    {
        $sample = new sample\Sample();

        //同じ値、同じ型でない場合エラー
        $this->assertSame($sample->i(), 'い');
    }
}
