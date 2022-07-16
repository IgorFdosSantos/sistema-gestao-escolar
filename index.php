<?php
    require "scripts/set-session-messages.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/styles.css">
        <title>SGE</title>
    </head>
    <body>

        <form action="script.php" method="POST" autocomplete="off">
            <div>
                <label>E-mail: </label>
                <input type="text" name="email"></input>

                <?php
                    $errorMessage = getEmailErrorMessage();
                    if(!empty($errorMessage)){
                        echo "$errorMessage";
                    }
                ?>
                
            </div>
            <div>
                <label>Senha: </label>
                <input type="password" name="password"></input>

                <?php
                    $errorMessage = getPasswordErrorMessage();
                    if(!empty($errorMessage)){
                        echo "$errorMessage";
                    }
                ?>

            </div>
            <div>
                <input type="submit" value="Entrar"/>

                <?php
                    $errorMessage = getLoginErrorMessage();
                    if(!empty($errorMessage)){
                        echo "$errorMessage";
                    }
                ?>
                
            </div>
        </form>

    </body>
</html>