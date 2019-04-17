<?php
include_once "Node.php";
include_once "MyLinkList.php";

$linkList = new LinkList();

$linkList->addFirst(1);
$linkList->addFirst(2);
$linkList->addLast(3);
$linkList->addLast(4);


print_r($linkList->readList());
echo "<br>";
$linkList->add(3, 1111);
print_r($linkList->readList());