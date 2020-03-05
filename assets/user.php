<?php
require_once("skrypty/db.php");
session_start();
$user_id = $_SESSION['user_id'];
$user = $conn->query("SELECT name,surname from workers where id = '".$user_id."'")->fetch();

echo '
Numer id przypisany do twojego konta: '.$user_id.', jestes zalogowany jako: '.$user['name'].' '.$user['surname'];


if(isset($_POST['submit'])){
    require("wyloguj.php");
}

?>

<form action="../skrypty/wyloguj.php">
<input type="submit" value="wyloguj">
</form>
