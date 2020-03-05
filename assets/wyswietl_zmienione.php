<?php
                    require_once("skrypty/db.php");
                    $shifts = $conn->query("SELECT Id_zmiany, Id_zabiera,Id_oddaje,archived FROM Zmiany_zmienione WHERE archived = 0");
                    echo "<table>";
                    echo "<tr class='row'>";
                         echo "<th class='column'>";
                            echo "Id";
                         echo "</th>";
                         echo "<th class='column'>";
                            echo "Data";
                         echo "</th>";
                         echo "<th class='column'>";
                            echo "Godzina p";
                         echo "</th>";
                         echo "<th class='column'>";
                            echo "Godzina k";
                         echo "</th>";
                         echo "<th class='column'>";
                            echo "Zabrał";
                         echo "</th>"; 
                         echo "<th class='column'>";
                            echo "Oddał";
                         echo "</th>"; 
                         echo "<th class='column'>";
                            echo "Archiwizuj";
                         echo "</th>"; 
                         echo "<th class='column'>";
                            echo "Usuń";
                         echo "</th>"; 
                    echo "</tr>";
                    while($shift = $shifts->fetch()){
                        echo "<tr class='row'>";
                            echo "<td class='column'>".$shift['Id_zmiany']."</td>";
                            $hour = $conn->query("SELECT Date, Start_Time, End_Time FROM hours WHERE Shift_id='".$shift['Id_zmiany']."'")->fetch();
                            echo "<td class='column'>".$hour['Date']."</td>";
                            echo "<td class='column'>".$hour['Start_Time']."</td>";
                            echo "<td class='column'>".$hour['End_Time']."</td>";
                            $user = $conn->query("SELECT Name, Surname FROM workers WHERE ID='".$shift['Id_zabiera']."'")->fetch();
                            echo "<td class='column'>".$user['Name']." ".$user['Surname']."</td>";
                            $user = $conn->query("SELECT Name, Surname FROM workers WHERE ID='".$shift['Id_oddaje']."'")->fetch();
                            echo "<td class='column'>".$user['Name']." ".$user['Surname']."</td>";
                            echo "<td class='column'><button onclick='archiwizuj(".$shift['Id_zmiany'].")'>Archiwizuj</button></td>";
                            echo "<td class='column'><button onclick='usun(".$shift['Id_zmiany'].")'>Usuń</button></td>";
                        echo "</tr>";
                    }
                    echo "<table>";
                    ?>