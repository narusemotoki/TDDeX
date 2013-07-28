<?php

class todoService
{
    protected $path;

    public function __construct($path)
    {
        if (file_exists($path)) {
            $this->path = $path;
        } else {
            throw new InvalidArgumentException();
        }
    }
}

