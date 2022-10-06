<?php

echo "<html><body><center><table border = '1px'>\n\n";

$file = fopen("file.csv", "r");

while (($data = fgetcsv($file)) !== false) {

    echo "<tr>";
    foreach ($data as $i) {
        echo "<td>" . htmlspecialchars($i)
            . "</td>";
    }
    echo "</tr> \n";
}

echo "\n</table></body></center></html>";


