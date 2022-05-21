<?php
require_once "application/controller/userData.class.php";
error_reporting(E_ALL ^ E_WARNING);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="lib/fa/css/all.min.css">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- modal -->
    <div class="modal flex">

        <div class="exit flex">
            <i class="fa-solid fa-xmark exit_btn"></i>
        </div>

        <div class="password_area flex">
            <h2>Your generated password</h2>
            <div class="password flex">
                <div><input type="text" readonly class="generated_password"></div>
                <div class="flex copy_btn"><i class="fa-regular fa-copy"></i></div>
            </div>
        </div>

    </div>
    <!-- end modal -->

    <div class="con flex">

        <div class="header flex">
            <h1>P<i class="fa-solid fa-lock"></i>ssword Generator</h1>
        </div>

        <div class="main flex">

            <div class="header flex">
                <p>Generate your dream password!</p>
            </div>

            <form action="index.php" method="POST" class="flex">

                <div class="element">
                    <p>Include upper case (A-Z):</p>
                    <div class="checkbox">
                        <input type="checkbox" name="uppercases">
                    </div>
                </div>

                <div class="element">
                    <p>Include lower case (a-z):</p>
                    <div class="checkbox">
                        <input type="checkbox" name="lowercases">
                    </div>
                </div>

                <div class="element">
                    <p>Include numbers (0-9):</p>
                    <div class="checkbox">
                        <input type="checkbox" name="numbers">
                    </div>
                </div>

                <div class="element">
                    <p>Include symbols (!,$,% etc.):</p>
                    <div class="checkbox">
                        <input type="checkbox" name="symbols">
                    </div>
                </div>

                <div class="element">
                    <p>Include other symbols (/,|,{,},^,~ etc.):</p>
                    <div class="checkbox">
                        <input type="checkbox" name="othersymbols">
                    </div>
                </div>

                <div class="element">
                    <p>Include your own characters:</p>
                    <div>
                        <input type="text" placeholder="e.g. G[5P+/6L" name="usercharacters">
                    </div>
                </div>

                <div class="element">
                    <p>Password length:</p>
                    <div>
                        <input type="number" min="1" max="2048" step="1" placeholder="e.g. 25 (default 8)" name="passwordlength">
                    </div>
                </div>

                <div class="form_btn flex">
                    <button type="submit" name="submit_btn">Generate <i class="fa-solid fa-key"></i></button>
                </div>

            </form>

            <?php
            if (isset($_POST['submit_btn'])) {
                $userData = new userData;
                var_dump($userData->getUserData());
            }
            ?>

        </div>

    </div>

    <div class="footer flex">
        Made by <a href="https://kscode.pl" target="_blank">KSCODE.PL</a> &copy;
    </div>

    <div class="overlay"></div>

</body>

<script src="js/modal.js"></script>

</html>