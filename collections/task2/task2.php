<?php

class Queue
{

    private array $dataStore = array();

    public function getLength(): int
    {
        return count($this->dataStore);
    }

    public function isEmpty(): bool
    {
        return $this->getLength() === 0;
    }

    public function enqueue($element): void
    {
        $this->dataStore[] = $element;
    }

    public function dequeue(): bool
    {
        if (!$this->isEmpty()) {
            return array_shift($this->dataStore);
        }
        return false;
    }

    public function show(): void
    {
        if (!$this->isEmpty()) {
            for ($i = 0; $i < $this->getLength(); $i++) {
                echo $this->dataStore[$i] . PHP_EOL;
            }
        } else {
            echo 'Черга пуста';
        }
    }

    public function clearQueue(): array
    {
        $this->dataStore = array();
        return $this->dataStore;
    }
}

$queue = new Queue();
echo "Черга пуста? ";
var_dump($queue->isEmpty());
echo "<br/>";
$queue->enqueue('a');
$queue->enqueue('b');
$queue->enqueue('c');
echo 'Довжина черги: ' . $queue->getLength() . "</br>";
echo 'черга: ';
$queue->show();
echo "</br>";
$queue->dequeue();
echo "</br>";
echo "a залишає команду,<br /> черга: ";
$queue->show();
$queue->clearQueue();
echo "Після опорожнення черги вона стає: ";
$queue->show();
