<?php

//Un gruppo di dati che insieme forma il genere umano

//Descrizione di ciò che vediamo in comune
//si parte dalla keyword class -> nuova classe
//Segue il nome della classe
//NOME DI UNA CLASSE:
// - DEVE ESSERE in inglese
// - DEVE ESSERE al singolare
// - DEVE INIZIARE con la lettera maiscola
// - se composto da più parole si utilizza il camelcase PublicCheck
//Essendo una classe una descrizione non esiste nulla di concreto
class Person{

    //Attributi o proprietà
    public $name; // TUTTE LE PERSONE HANNO UN NOME
    public $surname; //TUTTE LE PERSONE HANNO UN COGNOME
    public $age; //TUTTE LE PERSONE HANNO UNA ETà

    //attributo statico
    public static $count = 0;

    //Costruttore
    //Il nome deve essere preceduto da due "_" altrimenti non funzionzionerà mai
    //Uno dei compiti principali del costruttore è quello di dare dei valori reali agli atrributi descritti
    //Va dase che se in futuro una classe non dovesse avere attributi probabilmente non avremo bisogno di creare un costruttore
    public function __construct($nome,$cognome,$eta)
    {
        //$this Dell'oggetto che andrò a creare
        //Prendi l'attributo che ti specifico dopo la "->" e dagli un valore
        //Il valore prendilo dal dato che ti inserisco dopo "="
        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $eta;

        //self, cara classe DI TE STESSA
        // "::" si chiama scope resolution operator, cerca ciò che ti chiedo alla tua destra
        //prende quindi l'attributo statico cunter e ne aumenta il valore
        self::$count++;
    }

    //Metodi o comportamenti
    public function presentati(){//Tutte le persone parlano, cioè possono almeno presentarsi
        //$this nelle funzioni si traduce nell'oggetto che ho creato
        echo "Ciao sono $this->name $this->surname ed ho $this->age anni! \n";
    }

    public static function showPersonCounter(){
        echo self::$count;
    }

}


//OGETTI
//la keyword new attiva un costruttore
//quale costruttore? Quello della classe inserita subito dopo
//stiamo invocando la funzione __construct di Person
$ale = new Person('Alek','Leo', 36);
$francesco = new Person('Francesco','Baillobay', 34);
$ale2 = new Person('Alex','Marroni',34); 

//echo Person::$count;
//MEtodo più corretto per visualizzare un attributo
Person::showPersonCounter();

//$ale->count;

// print_r($ale);
// print_r($francesco);

//echo $ale->name;

//Lanciare un comportamento
//"->" entra nell'oggetto che è presente alla tua sinistra e prendi quello che ti sto chiedendo sulla destra
// $ale->presentati();
// $francesco->presentati();