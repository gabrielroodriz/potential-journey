<?php 

$login = $_POST['login'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];

function validPassword($password) {
    if ($password == $login) {
        echo "Error: assword must be different from the login";
    }
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@]{6,}$/', $password);
}

function diferentPassword($resp, $password, $passwordConfirm) {
    if($resp == true) {
        if(strcasecmp($password, $passwordConfirm) == 0) {
            echo "Login successfully created";
        } else {
            echo "Failed to create login, check password confirmation <br>";
           
        }
    } else {
        echo "Invalid password characters";
    }
}

$resp = validPassword($password);
diferentPassword($resp,$passwordConfirm, $passwordConfirm);
?>