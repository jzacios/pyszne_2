<?php
    require_once("skrypty/check.php");
?>
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
                <section class="asset_add">
                    <?php
                        require_once("assets/dodaj.php");
                        ?>
                </section>
            </section>   
            <section class="asset">
                <section class="asset_show">
                    <?php
                        require_once("assets/wyswietl.php");
                        ?>
                </section>
            </section>      
                        <script src="skrypty/take.js"></script>
        </section> 
    </body>
    </html>

