<?php


use PHPUnit\Framework\TestCase;
require_once __DIR__.'/Main.php';
class MainTest extends TestCase
{
    function testMain()
{
    self::assertEquals("Hello word",Main::hello());
}
}
