<?php

    function checkLogin(string $email, string $password): bool {
        if(empty($email) || empty($password)){
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
        if(checkLogin($email, $password)){
            unSetLoginErrorMessage();
        }
        else if(!checkLogin($email, $password)){
            getLoginErrorMessage();
        }
    }