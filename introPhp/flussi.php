<?php

$voto = 110;

// if($voto >= 60){
//     echo "Promosso";
// }else{
//     echo "Bocciato";
// }

// if($voto == 100){
//     echo "Promosso con lode";
// }elseif($voto >= 60){//abituatevi a questo elseif
//     echo "Promosso, Bravo!";
// }else{
//     echo "Bocciato";
// }

// if($voto == 100){
//     echo "Promosso con lode";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }elseif($voto >= 60){
//     echo "Promosso, Bravo!";
// }else{
//     echo "Bocciato";
// }

// switch($voto){
//     case $voto == 100:
//         echo "Promosso con lode";
//     break;
//     case $voto > 60 && $voto < 100:
//         echo "Promosso, Bravo!";
//     break;
//     case $voto == 60:
//         echo "Promosso sei stato fortunato!";
//     break;
//     default:
//         echo "Bocciato";
//     break;
// }

//FOR
//Il ciclo for è un blocco di codice che si ripete finchè una determinata condizione è verifica, nel caso specifico è il numero preciso di cicli che vogliamo effettuare, quindi il ciclo for si utilizza principalmente quando vogliamo ciclare un numero preciso di volte
// for ($i=0; $i < 10; $i++) { 
//     echo "$i \n";
// }

//FOREACH
//Il foreach è un blocco di codice che si ripete finchè tutti gli elementi di una struttura dati non saranno finiti
// $students = ['Matteo','Francesco','Alex','Chiara'];

// foreach ($students as $key => $student) {
//     echo "$student \n";
//     echo $key;
// }

//WHILE
//Il ciclo while è un blocco di codice che si ripete finchè una condizione è verificata cioe truthy
// $number = 101;
// while($number < 100){
//     echo "$number \n";
//     $number++;
// }

//DO WHILE
//Il ciclo do while è un blocco di codice che viene eseguito almeno una volta per poi ripetersi SOLO E SOLTANTO SE la condizione è verificata
// $number2 = 41;
// do{
//     echo "$number2 \n";
//     $number2++;
// }while($number2 < 40);


//GIOCHIAMO CON I CICLI
//$str = "exit";
// do{
//     $str = readline("Inserisci una parola: ");
//     // switch($str){
//     //     case
//     // }
// }while($str != "exit");

// $str = readline("Inserisci una parola: ");
// while($str != "exit"){
//     $str = readline("Inserisci una parola: ");
// }

// $students = [
//     ['name'=>'Francesco','surname'=>'Monti','age'=>'34'],
//     ['name'=>'Alex','surname'=>'Marroni','age'=>'34'],
//     ['name'=>'Chiara','surname'=>'Cortese','age'=>'21']
// ];

// foreach ($students as $student) {
//     //print_r($student);
//     //echo "Ciao sono $student['name'] $student['surname'] ed ho $student['age']";
//     //echo "Ciao sono ".$student['name']." ".$student['surname']." "."ed ho ".$student['age']."\n";
//     $name = $student['name'];
//     $surname = $student['surname'];
//     $age = $student['age'];

//     echo "Ciao sono $name $surname ed ho $age anni \n";
// }


$students = [
    ['name'=>'Francesco','surname'=>'Monti','age'=>'34'],
    ['name'=>'Alex','surname'=>'Marroni','age'=>'34'],
    ['name'=>'Chiara','surname'=>'Cortese','age'=>'21'],
    ['name'=>'Gabriele','surname'=>'La Rocca','age'=>'26'],
    ['name'=>'Giovanni','surname'=>'Fascella','age'=>'24'],
    ['name'=>'Matteo','surname'=>'Giarratana','age'=>'27'],
    ['name'=>'Paolo','surname'=>'Casu','age'=>'39']
];

//sotto i 25
//26 ai 30
//30 in su

// foreach($students as $student){
//     if($student['age'] > 30){
//         echo "Siete i veterani \n";
//     }elseif($student['age'] >= 26 && $student['age'] <= 30){
//         echo "Dai che ci siete quasi \n";
//     }elseif($student['age'] < 26){
//         echo "Avete strada da fare \n";
//     }else{
//         echo "Gli altri non ci sono \n";
//     }
// }

foreach($students as $student){
    $name = $student['name'];
    $surname = $student['surname'];

    if($student['age'] > 30){
        echo "$name $surname sei il veterano \n";
    }elseif($student['age'] >= 26 && $student['age'] <= 30){
        echo "$name $surname dai che ci sei quasi \n";
    }elseif($student['age'] < 26){
        echo "$name $surname hai strada da fare \n";
    }else{
        echo "Gli altri non ci sono \n";
    }
}