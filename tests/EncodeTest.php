<?php

namespace TheTribe\JSON\Tests;

use PHPUnit\Framework\TestCase;
use TheTribe\JSON;

class EncodeTest extends TestCase
{
    /**
     * @dataProvider getSuccessfulEncodeData
     */
    public function testSuccessfulEncode($value, $json)
    {
        $this->assertSame($json, JSON\encode($value));
    }

    public function getSuccessfulEncodeData()
    {
        yield [null, 'null'];
        yield ['', '""'];
        yield [[0, 1, 2], '[0,1,2]'];
    }

    /**
     * @dataProvider getErrorEncodeData
     * @expectedException \TheTribe\JSON\EncodeException
     */
    public function testErrorEncode($value)
    {
        JSON\encode($value);
    }

    public function getErrorEncodeData()
    {
        yield [NAN];
    }
}
