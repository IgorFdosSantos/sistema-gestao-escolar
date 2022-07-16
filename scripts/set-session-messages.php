<?php
    session_start();

    function setEmailErrorMessage(string $errorMessage): void {
        $_SESSION['email-error'] = $errorMessage;
    }

    function setPasswordErrorMessage(string $errorMessage): void {
        $_SESSION['password-error'] = $errorMessage;
    }

    function setLoginErrorMessage(string $errorMessage): void {
        $_SESSION['login-error'] = $errorMessage;
    }

    function getEmailErrorMessage(): ?string {
        if(isset($_SESSION['email-error'])){
            return $_SESSION['email-error'];
        }
        return null;
    }

    function getPasswordErrorMessage(): ?string {
        if(isset($_SESSION['password-error'])){
            return $_SESSION['password-error'];
        }
        return null;
    }

    function getLoginErrorMessage(): ?string {
        if(isset($_SESSION['login-error'])){
            return $_SESSION['login-error'];
        }
        return null;
    }

    function unSetEmailErrorMessage(): void{
        if(isset($_SESSION['email-error'])){
            unset($_SESSION['email-error']);
        }
    }

    function unSetPasswordErrorMessage(): void{
        if(isset($_SESSION['password-error'])){
            unset($_SESSION['password-error']);
        }
    }

    function unSetLoginErrorMessage(): void{
        if(isset($_SESSION['login-error'])){
            unset($_SESSION['login-error']);
        }
    }