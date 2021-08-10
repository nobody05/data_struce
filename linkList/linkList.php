<?php

/**
 * 节点
 * Class Node
 */
class Node
{
    public $data = [];
    public $next = null;

    public function __construct($data, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }

}

/**
 * Class LinkList
 * 单链表
 */
class LinkList
{
    protected $current;
    protected $last;
    protected $head;
    protected $count;

    public function append(Node $node)
    {
        if ($this->last()) {
            $this->last()->setNext($node);
        } else {
            $this->head = $node;
        }
        $this->last = $node;
        $this->count ++;
    }

    public function head()
    {
        return $this->head;
    }

    public function last()
    {
        return $this->last;
    }

    public function count()
    {
        return $this->count;
    }

    public function current()
    {
        if (!$this->current) {
            $this->current = $this->head();
        }

        return $this->current;
    }

    public function next()
    {
        $next = $this->current()->next;
        $this->current = $this->current->next;
        return $next;
    }
}

$n1 = new Node(['name' => 'lis']);
$n2 = new Node(['name' => 'lis2']);
$n3 = new Node(['name' => 'lis3']);
$n4 = new Node(['name' => 'lis4']);

$list = new LinkList();
$list->append($n1);
$list->append($n2);
$list->append($n3);
$list->append($n4);


while ($list->current()) {
    $current = $list->current();
    echo "current". ($current->data)['name']. PHP_EOL;

    if (!$list->next()) {
        break;
    }
}

