<?php
$mode = $mode ?? "insertion";
require "views/errors_form.html.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz@1,7..72&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital@1&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="/assets/css/style.css"/>
        <title>AesthethINK</title>
    </head>
    <body>
        <div class="box2"></div>
        <div class="register">
            <div>
                <img src="/img/9af5b39a70de1509eb2300a0328fe5b1.jpg" alt=""/>
            </div>
            <div class="reg">
                <div class="titlereg">
                    <h2>Register</h2>
                </div>
                <form action="" method="post">
                    <input type="text" name="name" class="name" value="<? $user->getUser() ?> <?= $mode == "suppression" ? "disabled" : "" ?> " placeholder="&nbsp N &nbsp A &nbsp M &nbsp E"/>
                    <label for="name"></label>
                    <br/>
                    <br/>
                    <input type="email" placeholder="&nbsp E &nbsp M &nbsp A &nbsp I &nbsp L" class="email" name="email" <?= $mode == "suppression" ? "disabled" : "" ?>/>
                    <label for="email"></label>
                    <br/>
                    <br/>
                    <input type="password" placeholder="&nbsp P &nbsp A &nbsp S &nbsp S &nbsp W &nbsp O &nbsp R &nbsp D" class="pw" name="password" <?= $mode == "suppression" ? "disabled" : "" ?>/>
                    <label for="password"></label>
                    <br/>
                    <br/>
                    <input type="cpassword" placeholder="&nbsp C &nbsp O &nbsp N &nbsp F &nbsp I &nbsp R &nbsp M &nbsp &nbsp  &nbsp &nbsp P &nbsp W" class="cpw" name="cpassword" <?= $mode == "suppression" ? "disabled" : "" ?>/>
                    <label for="cpassword"></label>
                    <br/>
                    <br/>
                    <input type="checkbox" class="remb" name="check"/>
                    <label for="checkbox" class="regb">I accept the terms & conditions</label>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary" name="submit">
                            <?= $mode == "suppression" ? "Confirmer" : "Enregistrer" ?>
                        </button>
                        <a href="<?= addLink("user") ?>" class="btn btn-danger">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

