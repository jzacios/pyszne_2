<html>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/login.css">
        <script src="https://kit.fontawesome.com/e8ad965ded.js" crossorigin="anonymous"></script>
        <title>Logowanie</title>
    </head>
    <body>
        <section class="wrapper">
            <form action="skrypty/login.php" method="post">
                    <section class="wrapper_login">
                        <span><i class="fa fa-user-o"></i></span>
                        <input type="text" placeholder="Login" required id="login" name="login">
                    </section>
                    <section class="wrapper_login">
                        <span><i class="fa fa-key"></i></span>
                        <input type="password" placeholder="Password" required id="haslo" name="password">
                    </section>
                    <span class="wrapper_login_submit"><input type="submit" value="Zaloguj"></span><br>
                    <a href="skrypty/register_form.php">
                        <span class="wrapper_login_submit"><input type="button" value="Rejestracja"></span>
                    </a>
                    <?php
                        if(isset($_SESSION['login_status'])){
                        echo($_SESSION['login_status']);
                        // unset($_SESSION['login_status']);
                    }
                    ?>
                </section>
            </form>
        </section> 
    </body>
    </html>