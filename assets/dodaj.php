    <form method="POST" action="../skrypty/send.php">
        <p>Date: <input type="date" name="date"/></p>
        <p>Start Time: <input type="time" name="times" step="1"/></p>
        <p>End Time: <input type="time" name="timee" step="1"/></p>
        <p><input type="submit" value="wyslij"/></p>
        <?php
            if(isset($_SESSION['add_status'])){
                if($_SESSION['add_status']){
                    echo "<span class='add_status'>Zmiana zostala dodana pomyslnie</span>";
                }else{
                    echo "<span class='add_status fail'>Zmiana nie zostala dodana pomyslnie</span>";
                }
                unset($_SESSION['add_status']);
            }

        ?>
    </form>