<?php

$data = file_get_contents("book.txt");
$records = explode("<----->", $data);

echo "<table >";

echo "<th>Name</th>
      <th>Email</th>
      <th>Message</th>
       <th>Time</th>";

foreach ($records as $record) {
    $row = explode("\n", trim($record));
    date_default_timezone_set("Europe/Minsk");
    $time=date("H:i:s\n");
   
    echo "
    <tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
     <td> $time </td>
    </tr>";
}

echo "</table>";
