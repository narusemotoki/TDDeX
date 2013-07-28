<?php

class todoModel
{
    protected $id;
    protected $title;
    protected $detail;
    protected $done;
    protected $created_at;
    protected $deleted_at;

    public function __construct($source)
    {
        $this->id = $source['id'];
        $this->title = $source['title'];
        $this->detail = $source['detail'];
        $this->done = $source['done'];
        $this->created_at = $source['created_at'];
        $this->deleted_at = $source['deleted_at'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDetail()
    {
        return $this->detail;
    }

    public function getDone()
    {
        return $this->done;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getDeletedAt()
    {
        return $this->deleted_at;
    }
}