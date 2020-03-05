<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>heheszki w orzeszki</title>
    </head>
    <body>
        <section class="wrapper">
            <form action="register.php" method="post">
                <section class="wrapper_login">
                    <a>Zarejestruj!</a>
                        <div class="input-box">
                            <span><i class="fa fa-user-o"></i></span>
                            <input class="" type="text" placeholder="Login" required id="user" name="user">
                        </div>
                        <div class="input-box">
                            <span><i class="fa fa-user-o"></i></span>
                            <input class="" type="password" placeholder="Password" required id="pass" name="password">
                        </div>
                        <div class="input-box">
                            <span><i class="fa fa-user-o"></i></span>
                            <input class="" type="text" placeholder="Name" required id="name" name="name">
                        </div>
                        <div class="input-box">
                            <span><i class="fa fa-user-o"></i></span>
                            <input class="" type="text" placeholder="Surname" required id="surname" name="surname">
                        </div>
                    <Br><span class="wrapper_register_submit"><input type="submit" value="Zarejestruj!"></span>
                </section>
            </form>
        </section>
    </body>
</html>