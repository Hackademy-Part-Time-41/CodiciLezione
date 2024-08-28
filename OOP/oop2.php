<?php

class Person{

    public $name; 
    public $surname; 
    public $age;

    use Jetpack;

    public function __construct($nome,$cognome,$eta)
    {
        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $eta;
    }

    public function presentati(){
        echo "Ciao sono $this->name $this->surname ed ho $this->age anni! \n";
    }

}

//extends -> ampliare il concetto base
class Teacher extends Person{
    public $subject;

    public function __construct($name,$surname,$age,$subject){
        //Person::__construct($name,$surname,$age); //Funziona ma sconsigliato
        parent::__construct($name,$surname,$age);
        //dell'oggetto che adnrò a creare
        $this->subject = $subject;
    }

    public function presentati(){
        echo "Ciao sono $this->name $this->surname , ho $this->age anni, ed insegno $this->subject \n";
    }
}

class Student extends Person{
    public $average;

    public function __construct($name,$surname,$age,$average){
        parent::__construct($name,$surname,$age);
        $this->average = $average;
    }

    public function presentati(){
        echo "Ciao sono $this->name $this->surname , ho $this->age anni, e la mia media è di $this->average, e mi devo ricordare che il venerdì devo completare i feedback in maniera positiva sempre! \n";
    }

}


//esterno
$ale = new Teacher("Alek","Leo",36,"Php");
$ale->presentati();
$ale->fly();

$simone = new Student("Simone","Delle Foglie",24,9);
$simone->presentati();
$simone->fly();

// $ale->subject = "Java";
// $ale->name = "Ciccio";
// $ale->presentati();

// $ale->presentatiDocente();

// $genericPerson = new Person("Zio","Paperino", 23);
// $genericPerson->presentatiDocente();

//Trait
trait Jetpack{
    public function fly(){
        echo "Yhuuuuuuuuuu sto volando \n";
    }
}