<?php

$password = readline("Inserisci una password sicura: ");

function checkLength($password){
    return strlen($password) >= 8;
}

function checkNumber($password){
    $Number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9 ];
    for ($i=0; $i < strlen($password); $i++){
        if(in_array($password[$i], $Number)){
            return true;
        }
    }
    return false;
}

function checkSpecial($password){
    $specialChars = ['@', '#', '&', '$', '%', '?', '/', '£', '!'];
    for ($i=0; $i < strlen($password); $i++) { 
        if(in_array($password[$i], $specialChars)){
            return true;
        }
    }
    return false;
}

function checkLower($password){
    for ($i=0; $i < strlen($password); $i++) {
        if(ctype_lower($password[$i])){
            return true;
        }
    }
    return false;
}

function checkUpper($password){
    for ($i=0; $i < strlen($password); $i++) {
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    return false;
}

function controlloPassword(string $password){
    if (!checkLength($password)) {
        echo "Inserisci almeno 8 caratteri.\n";
    }  elseif (!checkSpecial($password)) {
        echo "Inserisci almeno un carattere speciale";
    } elseif (!checkNumber($password)) {
        echo "Inserisci almeno un carattere numerico";
    } elseif (!checkLower($password)) {
        echo "Inserisci almeno un carattere minuscolo";
    } 
    elseif (!checkUpper($password)) {
        echo "Inserisci almeno un carattere maiuscolo";
        
    } else {
        echo "Registrazione Password completata";
    }
}

controlloPassword($password);
