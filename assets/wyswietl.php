<?php
require_once("skrypty/db.php");

$shifts = $conn->query("SELECT DATE, Start_Time,End_Time,Shift_id,User_ID, timediff(End_Time,Start_Time) as czas FROM hours WHERE Date >= '".date('Y-m-d')."' AND oddana != 1 AND User_ID !=".$_SESSION['user_id']);

$shifts = $conn->query("SELECT DATE, Start_Time,End_Time,Shift_id,User_ID, timediff(End_Time,Start_Time) as czas FROM hours WHERE Date >= '".date('Y-m-d')."' AND oddana != 1 AND User_ID !=".$_SESSION['user_id']);

echo "Zmiany do zabrania:";

echo "<table>";
$i = 1;
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
        echo "<td class='column'>";
            echo "<button class='take' onclick='take(".$shift['Shift_id'].")'>Zabierz</button>";
        echo "</td>";
    echo "</tr>";
    $i++;
}
echo "</table>";