<?php

class User
{
    private int $age;
    public int $number;
    private string $name;
    private string $surname;

    public function __construct(int $age, int $number, string $name, string $surname)
    {
        $this->age = $age;
        $this->number = $number;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getUserData(): string
    {
        return 'name: ' . $this->name
            . '<br/>SurName: ' . $this->surname
            . '<br/>Age: ' . $this->age
            . '<br/>Number: ' . $this->number
            . '<br/>';
    }
}

//
//$user = new User(45, 3809615504, 'Ivan', 'Franko');
//echo $user->getUserData();

$users = [];
$users[] = new User(45, 3809615504, 'Ivan', 'Franko');
$users[] = new User(48, 3809685902, 'Ivan', 'Franko');
$users[] = new User(25, 3809600454, 'Ivan', 'Franko');
$users[] = new User(15, 3809625254, 'Ivan', 'Franko');
$users[] = new User(95, 3809521490, 'Ivan', 'Franko');
$users[] = new User(21, 3809905411, 'Ivan', 'Franko');
$users[] = new User(28, 3805045154, 'Ivan', 'Franko');
$users[] = new User(85, 3809788564, 'Ivan', 'Franko');
$users[] = new User(34, 3809915555, 'Ivan', 'Franko');
$users[] = new User(39, 3805012515, 'Ivan', 'Franko');
$users[] = new User(48, 3806715300, 'Ivan', 'Franko');

//echo '<pre>';
//print_r($users);
//echo '<pre/>';

function sortByNumber($a, $b)
{
    if ($a->number == $b->munber) {
        return 0;
    }
    return ($a->number < $b->number) ? -1 : 1;
}

usort($users, 'sortByNumber');
echo '<pre>';
print_r($users);
echo '<pre/>';