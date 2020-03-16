<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/e8ad965ded.js" crossorigin="anonymous"></script>
        <title>Rejestracja</title>
    </head>
    <body>
        <form action="register.php" method="post">
            <section class="wrapper_login">
                <span><i class="fa fa-user-o"></i></span>
                <input type="text" placeholder="Login" required id="user" name="user">
            </section>
            <section class="wrapper_login">
                <span><i class="fa fa-key"></i></span>
                <input type="password" placeholder="Password" required id="pass" name="password">
            </section>
            <section class="wrapper_login">
                <span><i class="fa fa-signature"></i></span>
                <input type="text" placeholder="Name" required id="name" name="name">
            </section>
            <section class="wrapper_login">
                <span><i class="fa fa-signature"></i></span>
                <input type="text" placeholder="Surname" required id="surname" name="surname">
            </section>
            <section class="wrapper_login_submit">
                <input type="submit" value="Zarejestruj!">
            </section>
        </form>
    </body>
</html>