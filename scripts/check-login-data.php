<?php

    function checkEmail(string $email): bool {
        if(empty($email)){
            setEmailErrorMessage('Por favor, insira um e-mail!');
            return false;
        } 
        /* else if(is_numeric($email)){
            echo 'número';
        }
        else if(strlen($email) < 10){
            echo 'menor que 10';
        } */
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            setEmailErrorMessage('Por favor, insira um e-mail válido!');
            return false;
        }

        return true;
    }

    function checkPassword(string $password): bool {
         if(empty($password)){
            setPasswordErrorMessage('Por favor, preencha o campo de senha!');
            return false;
        }

        return true;
    }

    function checkLogin(string $email, string $password): bool {
        if(empty($email) && empty($password)){
            setLoginErrorMessage('Por favor, preencha todos os campos!');
            return false;
        }
        /* if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            setEmailErrorMessage('Por favor, insira um e-mail válido!');
            return false;
        }
        else{
            unSetEmailErrorMessage();
        } */
        else if(strlen($email) > 60){
            setLoginErrorMessage('E-mail ou senha incorretos!');
            return false;
        }
        else if(strlen($password) < 8){
            setLoginErrorMessage('E-mail ou senha incorretos!');
            return false;
        }
        else if(strlen($password) > 40){
            setLoginErrorMessage('E-mail ou senha incorretos!');            
            return false;
        }

        return true;
    }

    function checkLoginData(string $email, string $password): ?string {
        if(checkEmail($email)){
            unSetEmailErrorMessage();
        }
        else if(!checkEmail($email)){
            getEmailErrorMessage();
        }
         if(checkPassword($password)){
            unSetPasswordErrorMessage();
        }
        else if(!checkPassword($password)){
            getPasswordErrorMessage();
        } 
        if(checkLogin($email, $password)){
            unSetLoginErrorMessage();
        }
        else if(!checkLogin($email, $password)){
            getLoginErrorMessage();
        }
    }