<html>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/main.css">
        <title>Zmiany</title>
    </head>
    <body>
        <section class="wrapper">
            <section class="asset">
                <section class="asset_show">
                    <?php
                    require_once("skrypty/db.php");
                    $shifts = $conn->query("SELECT Id_zmiany, Id_zabiera,Id_oddaje,archived FROM Zmiany_zmienione WHERE archived = 0");
                    echo "<table>";
                    echo "<tr class='row'>";
                         echo "<th class='column'>";
                            echo "Id";
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
                    echo "</tr>";
                    while($shift = $shifts->fetch()){
                        echo "<tr class='row'>";
                            echo "<td class='column'>".$shift['Id_zmiany']."</td>";
                            $user = $conn->query("SELECT Name, Surname FROM workers WHERE ID='".$shift['Id_zabiera']."'")->fetch();
                            echo "<td class='column'>".$user['Name']." ".$user['Surname']."</td>";
                            $user = $conn->query("SELECT Name, Surname FROM workers WHERE ID='".$shift['Id_oddaje']."'")->fetch();
                            echo "<td class='column'>".$user['Name']." ".$user['Surname']."</td>";
                            echo "<td class='column'><button>Archiwizuj</button></td>";
                        echo "</tr>";
                    }
                    echo "<table>";
                    ?>
                </section>
            </section> 
        </section>
    </body>
    </html>

