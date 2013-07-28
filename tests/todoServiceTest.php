<?php
require_once "./src/todoService.php";

class todoServiceTest extends PHPUnit_Framework_TestCase
{
    public function setup()
    {

    }

    /**
     * @test
     */
    public function コントラクタでファイルをチェックしている()
    {
        $this->assertInstanceOf("todoService", new todoService("./tests/data-test.json"));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function コントラクタでファイル不正の場合は例外を投げる()
    {
        new todoService("test");
    }
}
