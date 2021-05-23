<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit=10){
        $this->stack=[];
        $this->limit=$limit;
    }

    public function push($item){
        if (count($this->stack) < $this->limit){
            array_unshift($this->stack,$item);
        } else {
            throw new RunTimeException("stack is full, sorry");
        }
    }

    public function top(){
        return current($this->stack);
    }

    public function isEmpty(){
        return empty($this->stack);
    }

    public function pop(){
        if($this->isEmpty()){
            throw new RunTimeException ("Stack is empty!");
        } else {
            return  array_shift($this->stack);
        }
    }
}