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
                <section class="asset_add">
                    <?php
                        require_once("assets/user.php");
                        ?>
                </section>
            </section>
            <section class="asset">
                <section class="asset_show">
                    <?php
                        include("assets/wyswietl_zmienione.php");
                    ?>
                </section>
            </section>
        </section>
            <form method="POST" action="skrypty/archiwizuj.php" id="form_submit" style="display: none">
                <input type="text" name="id" id="form" value="" style="display: none">
                <p name="yhym"></p>
            </form>
            <form method="POST" action="skrypty/usun.php" id="form_submit_usun" style="display: none">
                <input type="text" name="id" id="form_usun" value="" style="display: none">
                <p name="yhym"></p>
            </form>
        <script src="skrypty/archiwizuj.js"></script>
        <script src="skrypty/usun.js"></script>
    </body>
    </html>

