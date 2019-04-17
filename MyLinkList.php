<?php

//include "Node.php";
class LinkList
{
    private $firstNode;
    private $lastNode;
    private $countNode;


    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->countNode = 0;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == null) {
            $this->lastNode = $link;
        }
        $this->countNode++;
    }

    public function addLast($data)
    {
        if ($this->firstNode != null) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->countNode++;
        } else {
            $this->addFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->countNode;
    }

    public function readList()
    {
        $listData = [];
        $currentFirst = $this->firstNode;

        while ($currentFirst != NULL) {
            array_push($listData, $currentFirst->data);
            $currentFirst = $currentFirst->next;
        }
        return $listData;
    }

    public function findNode($index)
    {
        if ($index >= 0 && $index < count($this->readList())) {
            $arrayData = $this->readList();
            $dataFind = $arrayData[$index];
            $node = $this->firstNode;


            for ($index = 0; $index < count($arrayData); $index++) {
                if ($dataFind == $node->data) {
                    return $node;
                } else {
                    $node = $node->next;
                }
            }
        } else {
            echo "not in array";
        }
    }

    public function add($indexAdd, $dataAdd)
    {
        $nodeLeft = $this->findNode($indexAdd - 1);
        $nodeAdd = new Node($dataAdd);
        $nodeAdd->next = $nodeLeft->next;
        $nodeLeft->next = $nodeAdd;
    }
}