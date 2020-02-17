<?php
require_once("skrypty/db.php");
$shifts = $conn->query("SELECT DATE, Start_Time,End_Time,Shift_id,User_ID, timediff(End_Time,Start_Time) as czas FROM hours WHERE Date >= '".date('Y-m-d')."' && User_ID='".$user_id."'");



echo "<table>";
$i = 1;
echo '
Zmiany dodane przez Ciebie:';

while($shift = $shifts->fetch()){
    echo "<tr class='row' id=".$shift['Shift_id'].">";
        echo "<td class='column'>";
            echo $i;
        echo "</td>";
        echo "<td class='column'>";
            echo $shift['DATE'];
        echo "</td>";
        echo "<td class='column'>";
            echo $shift['Start_Time'];
        echo "</td>";
        echo "<td class='column'>";
            echo $shift['End_Time'];
        echo "</td>";
        echo "<td class='column'>";
            echo $shift['czas'];
        echo "</td>";
    echo "</tr>";
    $i++;
}
echo "</table>";