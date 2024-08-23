<?php

//Dichiara una funzione
//Composta da tre parti
//La keyword function
//Nome della funzione -> nome utile affinchè possiamo richiamarla -> il nome della funzione deve iniziare con la minuscola -> due funzioni con lo stesso nome non possono coesistere nello stesso file
//"()" il cancello d'entrata di una funzione, è il luogo all'interno del quale inseriremo i parametri FORMALI
//"{}" il corpo della funzione -> non è altro che il codice da eseguire
function sayHello($name,$surname){ //i parametri appena inseriti si chiamano parametri FORMALI
    echo "Ciao $name $surname sono la tua prima funzione \n";
}

//Richiami di funzione con parametri REALI
// sayHello('Alek','Leo');
// sayHello('Francesco','Baillobay');
// sayHello('Matteo','Giarratana');
// sayHello('Alex','Marroni');
// sayHello('Emilio','Minore');

//SCOPE E VISIBILITA'
// $num = 0;
// function stamp(){
//     echo $num;
// }

// stamp();
$num1 = 5;
$num2 = 17;

// function sum($x,$y){
//     echo $x + $y;
// }

// function sum($num1,$num2){
//     echo $num1 + $num2;
// }

//sum($num1,$num2);

// const NUM3 = 7;
// const NUM4 = 23;

// function sumConst(){
//     echo NUM3 + NUM4;
// }

// sumConst();

// function sum($num1,$num2){
//     return $num1 + $num2;
// }

// $result = sum($num1,$num2);
// echo $result;

//inline variable
//echo sum($num1,$num2);


//parametro di default
// function sum($num1 = 350,$num2 = 100, $num3 = 300){
//     return $num1 + $num2 + $num3;
// }

// echo sum($num1, 0 ,$num3);


// function sum($num1,$num2){
//     return $num1 + $num2;
// }

// function sum1($num1,$num2,$num3){
//     return $num1 + $num2 + $num3;
// }

// function sum2($num1,$num2,$num3,$num4){
//     return $num1 + $num2 + $num3 + $num4;
// }

//SPLAT OPERATOR
// function sum(...$numbers){
//     print_r($numbers);
// }

function sum(...$numbers){
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number; // $sum = $sum + $number;
    }
    return $sum;
}

echo sum();

// function funzione($param1,$parm2){
//     echo "$param1 $parm2";
// }

// $result = funzione("Hello" , function(){
//     return "World";
// });

// echo $result;