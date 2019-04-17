<?php


class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function getData(){
        return $this->data;
    }
}