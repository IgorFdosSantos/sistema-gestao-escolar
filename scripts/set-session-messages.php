<?php
    session_start();

    function setLoginErrorMessage(string $errorMessage): void {
        $_SESSION['login-error'] = $errorMessage;
    }

    function getLoginErrorMessage(): ?string {
        if(isset($_SESSION['login-error'])){
            return $_SESSION['login-error'];
        }
        return null;
    }

    function unSetLoginErrorMessage(): void{
        if(isset($_SESSION['login-error'])){
            unset($_SESSION['login-error']);
        }
    }