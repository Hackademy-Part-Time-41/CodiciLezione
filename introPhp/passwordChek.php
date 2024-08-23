<?php

//ALMENO 8 CARATTERI
//ALMENO UNA MAIUSCOLA
//ALMENO UN NUMERO
//ALMENO UN CARATTERE SPECIALE

$pwd = readline("Inserisci una password: ");
//echo $pwd;

//ALMENO 8 CARATTERI
function checkLenght($string){
    if(strlen($string) >= 8){
        return true;
    }else{
        return false;
    }
}

// checkLenght(string $string): bool

//ALMENO UNA MAIUSCOLA
//ciAo
function checkUpper($string){
    for ($i=0; $i < strlen($string); $i++) { 
        //echo "$pwd[$i] \n";
        if(ctype_upper($string[$i])){
            return true;
        }
    }

    return false;
}
//return as soon as possible
//checkUpper(string $string): bool

//ALMENO UN NUMERO
function checkNumber($string){
    for ($i=0; $i < strlen($string); $i++) { 
        if(is_numeric($string[$i])){
            return true;
        }
    }
    return false;
}

//checkNumber(string $string): bool

//ALMENO UN CARATTERE SPECIALE
function checkSpecial($string){
    $special_chars = ['!','@','#','$'];

    for ($i=0; $i < strlen(($string)); $i++) { 
        if(in_array(($string)[$i], $special_chars)){
            return true;
        }
    }
    return false;
}

//checkSpecial(string $string): bool

function chekPassword($password){

    $checkLenght = checkLenght($password);
    $checkUpper = checkUpper($password);
    $checkNumber = checkNumber($password);
    $checkSpecial = checkSpecial($password);

    if($checkLenght && $checkUpper && $checkNumber && $checkSpecial){
        return true;
    }

    return false;
}

//chekPassword(string $password): bool

if(chekPassword($pwd)){
     echo "Password corretta!";
}else{
    echo "Password errata!";
}
