<html>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/login.css">
        <title>Logowanie</title>
    </head>
    <body>
        <section class="wrapper">
            <form action="skrypty/login.php" method="post">
                <section class="wrapper_login">
                    <span class="wrapper_login_login">Login: <input type="text" id="login" name="login"></span><br>
                    <span class="wrapper_login_password">hasło: <input type="password" id="haslo" name="password"></span>
                    <span class="wrapper_login_submit"><input type="submit" value="zaloguj"></span>
                    <a href="skrypty/register_form.php"><span class="wrapper_login_submit"><input type="button" value="zarejestruj"></span></a>
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