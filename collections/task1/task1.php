<?php

class Stack
{
    protected array $stack;
    protected int $limit;

    public function init($limit = 10): void
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item): void
    {
        if (count($this->stack) < $this->limit) {

            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top(): string
    {
        return current($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function showStack(): void
    {
        echo "<pre>";
        print_r($this->stack);
        echo "</pre>";
    }
}

$stack = new Stack();
$stack->init(15);
for ($i = 1; $i <= 15; $i++) {
    $value = "тарілка №" . $i;
    $stack->push($value);
}

echo $stack->top();
$stack->showStack();
echo $stack->pop();
$stack->showStack();
echo '<br/>';
var_dump($stack->isEmpty());


