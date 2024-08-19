<?php

//Come si dichiara una variabile
//In php il ";" definisce la fine di uno statement(comando)
//$name = "Alek";
//REGOLE
/*
UNA VARIABILE:
- DEVE iniziare con il $
- DEVE iniziare con una lettera o un _
- NON PUO' iniziare con un numero
- PUO' contenere caratteri alfanumerici o _
- NON PUO' contenere spazi vuoti
*/
//direttiva di php che recuperà tutto ciò che è all'interno di quello che gli viene scritto a destra e lo trasforma in una stringa
//echo $name;

//PHP è case sensitive

// $naMe = "Jacopo";

// echo $naMe;
// echo "\n";

//LE COSTANTI
//const NAME = "Matteo";
//NAME = "Chiara";

//echo NAME;

//TIPI DI DATO
//TIPI DI DATO SEMPLICE
$name = "Alex"; //string
$number = 7; //integer
$is_teacher = true; //boolean
$number2 = 5.65874657; //float

//TIPI DI DATO SPECIALE
$null = null;

//TIPI DI DATO COMPOSTO
//Array

//Oggetti -> coming soon

//Type juggling
// $name = 7;
// echo $name;

//BUILT IN FUNCTION PER ANALIZZARE IL VALORE DELLA VARIABILE
// var_dump($name);
// var_dump($number);
// var_dump($is_teacher);
// var_dump($number2);
// var_dump($null);

//Approfonidamo le stringhe
$stringa = "Francesco";
$age = 34;

//concatenazione di stringhe
//echo 'Ciao il mio nome è ' . $stringa . 'ed ho ' . $age;

//VARIABLE INTERPOLATION
//Inserisco all'interno di una dato ad esempio una stringa un dato che potrebbe essere non ancora definito
//echo "Ciao il mio nome è $stringa ed ho $age anni \n";

//Vediamo i numeri interi
// $num1 = 5;
// $num2 = "Francesco10";

// echo $num1 + $num2;

//Array
//DICHIARAZIONE TRAMITE BUILT-IN
//$arr = array('A','B','C');

$arr = ['A','B','C'];

//Per i tipi di dato composto non possiamo utilizzare echo
// print_r($arr);
//var_dump($arr);

//print_r($arr[1]);

//echo $arr[1];

$arr = ['D','E', 0, 4.56666 , ['F','G', 26, ['ciao']]];

//var_dump($arr);
//echo $arr[4][3][0];

//Array associativo
//E' un arrai che possiede un insieme di elementi "chiave => valore"
//nell'array associativo gli indici vengono sostituiti dalle chiavi
// $francesco = [
//     'name'=>'Franceco',
//     'surname'=> 'Monti',
//     'age'=>'34'
// ];

// var_dump($francesco);

// echo $francesco['surname'];

$students = [
    ['name'=>'Francesco','surname'=>'Monti','age'=>'34'],
    ['name'=>'Alex','surname'=>'Marroni','age'=>'34'],
    ['name'=>'Chiara','surname'=>'Cortese','age'=>'21']
];

$i = 1;

$name = $students[$i]['name'];
$surname = $students[$i]['surname'];
$age = $students[$i]['age'];

echo "Ciao sono $name $surname di età $age";