<?php
include_once "Element.php";

class Queue
{
    private $front = null;
    private $back = null;

    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Element();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $this->back->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removeValue = $this->front->value;
        $this->front = $this->front->next;
        return $removeValue;
    }
}