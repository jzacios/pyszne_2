<?php
require_once("skrypty/db.php");

$user_id = $_SESSION['user_id'];
$user = $conn->query("SELECT name,surname from workers where id = '".$user_id."'")->fetch();

echo '
<a>Numer id przypisany do twojego konta: '.$user_id.', jestes zalogowany jako: '.$user['name'].' '.$user['surname'].'</a>';


if(isset($_POST['submit'])){
    require("wyloguj.php");
}

?>

<form action="../skrypty/wyloguj.php">
<input type="submit" value="wyloguj" name="hehe" id="hehe">
</form>
