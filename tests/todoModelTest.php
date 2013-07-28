<?php
require_once "./src/todoModel.php";

class todoModelTest extends PHPUnit_Framework_TestCase
{
    private $source = array(
        "created_at" => 1374196321047,
        "deleted_at" => null,
        "detail" => "detail1",
        "done" => false,
        "id" => 1,
        "title" => "title1",
    );

    /**
     * @test
     */
    public function コンストラクタに連想配列を渡すとtodoオブジェクトが生成されること()
    {
        $todo = new todoModel($this->source);
        $this->assertInstanceOf("todoModel", $todo);

        return $todo;
    }

    /**
     * @test
     * @depends コンストラクタに連想配列を渡すとtodoオブジェクトが生成されること
     */
    public function コンストラクタに連想配列を渡すとフィールドに保持されること($todo)
    {
        $this->assertEquals($this->source['id'], $todo->getId());
        $this->assertEquals($this->source['title'], $todo->getTitle());
        $this->assertEquals($this->source['detail'], $todo->getDetail());
        $this->assertEquals($this->source['done'], $todo->getDone());
        $this->assertEquals($this->source['created_at'], $todo->getCreatedAt());
        $this->assertEquals($this->source['deleted_at'], $todo->getDeletedAt());
    }
}