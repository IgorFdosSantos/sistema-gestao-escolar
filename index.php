<?php
    require "scripts/set-session-messages.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/login-page-style.css">
        <title>SGE | Entrar</title>
    </head>
    <body>
    <div class="bg-image"></div>
        <section id="main">
            <section id="slogan">
                <div>
                    <label class="title">SGE</label>
                    <p>um jeito mais fácil <br> de <span>gerenciar o futuro</span></p>
                </div>
            </section>

            <form action="script.php" method="POST" autocomplete="off">
                <div>
                    <p class="welcome-text">Bem-vindo!</p>
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-envelope"></i>
                    <!-- <label>E-mail: </label> -->
                    <input type="text" name="email" placeholder="E-mail"></input>                    
                </div>
                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <!-- <label>Senha: </label> -->
                    <input type="password" name="password" placeholder="Senha"></input>
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div class="forgot-password">
                    <p>Esqueceu sua senha?</p>
                </div>
                <div class="form-footer">
                    <input type="submit" value="Entrar" class="login-button"/>

                    <?php
                        $errorMessage = getLoginErrorMessage();
                        if(!empty($errorMessage)){
                            echo "<p class='error-message'>$errorMessage</p>";
                        }
                    ?>
                    
                </div>                
            </form>
        </section>

        
        <footer>
            <p>&copy SGE. Todos os direitos reservados</p>
        </footer>
    

        <script src="https://kit.fontawesome.com/1fd57b3261.js"></script>
    </body>
</html>