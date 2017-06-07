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
        $this->assertEquals($value, JSON\decode($json));
    }

    public function getSuccessfulDecodeData()
    {
        yield ['null', null];
        yield ['""', ''];
        yield ['[0,1,2]', [0, 1, 2]];
        yield ['{"foo": "bar"}', (object) ['foo' => 'bar']];
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

    /**
     * @dataProvider getDecodeAsArrayData
     */
    public function testDecodeAsArray($json, $value)
    {
        $this->assertEquals($value, JSON\decode($json, \JSON_OBJECT_AS_ARRAY));
    }

    public function getDecodeAsArrayData()
    {
        yield ['null', null];
        yield ['{"foo": "bar"}', ['foo' => 'bar']];
    }
}
