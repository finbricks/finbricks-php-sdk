<?php

namespace Encryptor;

use Finbricks\Sdk\Encryptor\AEncryptor;
use PHPUnit\Framework\TestCase;

class AEncryptorTest extends TestCase
{


    public function testShouldReturnEmptyStringOnEmptyArray()
    {
        self::assertEquals("", AEncryptor::makeStringForSign([]));
    }

    public function testShouldReturnEmptyStringOnNonAssociatedArray()
    {
        self::assertEquals("1|2|3", AEncryptor::makeStringForSign([1, 2, 3]));
    }

    public function testShouldReturnStringWithoutSeparatorAtTheEnd()
    {
        self::assertEquals("1", AEncryptor::makeStringForSign([1]));
    }

    public function testShouldSortAssociatedArray()
    {
        $arr = [
            "z" => 1,
            "y" => 2,
            "a" => 3,
        ];
        self::assertEquals("3|2|1", AEncryptor::makeStringForSign($arr));
    }

    public function testShouldNotAddItemWhenValueIsNull()
    {
        $arr = [
            "z" => null,
            "y" => null,
            "a" => 3,
        ];
        self::assertEquals("3", AEncryptor::makeStringForSign($arr));
    }

    public function testShouldAddItemWhenValueIsEmptyString()
    {
        $arr = [
            "a" => 3,
            "b" => "",
            "c" => "2",
        ];
        self::assertEquals("3||2", AEncryptor::makeStringForSign($arr));
    }

}
