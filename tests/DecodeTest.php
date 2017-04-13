<?php

namespace TheTribe\JSON\Tests;

use PHPUnit\Framework\TestCase;
use TheTribe\JSON;

class DecodeTest extends TestCase
{
    /**
     * @dataProvider getSuccessfulDecodeData
     */
    public function testSuccessfulDecode($json, $value)
    {
        $this->assertSame($value, JSON\decode($json));
    }

    public function getSuccessfulDecodeData()
    {
        yield ['null', null];
        yield ['""', ''];
        yield ['[0,1,2]', [0, 1, 2]];
    }

    /**
     * @dataProvider getErrorDecodeData
     * @expectedException \TheTribe\JSON\DecodeException
     */
    public function testErrorDecode($value)
    {
        JSON\decode($value);
    }

    public function getErrorDecodeData()
    {
        yield ['{'];
    }
}
