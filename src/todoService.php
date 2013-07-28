<?php

class todoService
{
    protected $path;

    public function __construct($path)
    {
        if (file_exists($path)) {
            $this->path = $path;
            $this->todos = json_decode(file_get_contents($this->path));
        } else {
            throw new InvalidArgumentException();
        }
    }

    public function count()
    {
        return count($this->todos);
    }

    public function getAll()
    {
        return array();

    }
}

