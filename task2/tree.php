<?php

$tree = [
    [
        "id" => 1,
        "name" => "Parent 1",
        "parent_id" => 'відсутній   ',
        "children" => [
            [
                "id" => 10,
                "name" => 'Child 1(1)',
                "parent_id" => 1
            ],
            [
                "id" => 11,
                "name" => 'Child 2(1)',
                "parent_id" => 1,
                "children" => [
                    [
                        "id" => 12,
                        "name" => 'Child 1(11)',
                        "parent_id" => 11
                    ],
                    [
                        "id" => 13,
                        "name" => 'Child 2(11)',
                        "parent_id" => 11
                    ],
                ]
            ]
        ]
    ],
    [
        "id" => 2,
        "name" => "Child2",
        "parent_id" => 1,
        "children" => [
            [
                "id" => 20,
                "name" => 'Child 1(2)',
                "parent_id" => 1
            ],
            [
                "id" => 21,
                "name" => 'Child 2(2)',
                "parent_id" => 1,
                "children" => [
                    [
                        "id" => 212,
                        "name" => 'Child 1(21)',
                        "parent_id" => 11
                    ],
                    [
                        "id" => 213,
                        "name" => 'Child 2(21)',
                        "parent_id" => 11
                    ],
                ]
            ]
        ]
    ],
    [
        "id" => 3,
        "name" => "Сhild 3",
        "parent_id" => 1,
        "children" => []
    ]
];

function drawTree(array $array)
{
    echo "<ul>";
    foreach ($array as $value) {
        if (isset($value["id"])) {
            echo "<li>" . $value["id"] . " . " . $value["name"] . "</li>";
            if (isset($value["children"])) {
                drawTree($value["children"]);
            }
        }
    }
    echo "</ul>";
}

drawTree($tree);
