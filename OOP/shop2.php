<?php
class Shop{

    //Attributi di classe
    public $name;
    public $piva;
    public $address;
    public $products;
    public $contact;
    public $openTime;

    public static $sale = 0;

    //Costruttore
    public function __construct($name,$piva,$address,$products,$contact,$openTime)
    {
        $this->name = $name;
        $this->piva = $piva;
        $this->address = $address;
        $this->products = $products;
        $this->contact = $contact;
        $this->openTime = $openTime;
    }

    //Metodi
    public function shopPresentation(){
        echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrei contattarci al $this->contact \n";
    }

    public function showOpenTime(){
        echo "Il negozio è aperto negli orari $this->openTime \n";
    }

    public function showProducts(){
        //ricordiamoci che l'attributo $products sarà un array con singoli elementi
        foreach ($this->products as $product) {
            echo "$product \n";
        }

        if(self::$sale > 0){
            $saleTot = self::$sale;
            echo "Tutti i nostri prodotti potrai trovarli con lo sconto del $saleTot % \n";
        }
    }

    public static function addSale($saleNumber){
        self::$sale += $saleNumber;
    }

}

class Abbigliamento extends Shop{
    public $usedClothesService;
    public $changeRoomNumber;

    public function __construct($name,$piva,$address,$products,$contact,$openTime,$usedClothesService,$changeRoomNumber)
    {
        parent::__construct($name,$piva,$address,$products,$contact,$openTime);
        $this->usedClothesService = $usedClothesService;
        $this->changeRoomNumber = $changeRoomNumber;
    }

    public function shopPresentation(){
        //Se ha il servizio di abiti usati dirmi che li ha, altrimenti no
        //Se ha il servizio di camerini dirmi quanti ne ha
        //Se non non ha ne l'uno ne l'altro non dirmi nulla
        //frase 1 e 0
        //frase 0 e 1
        //frase 1 e 1
        //"Siamo il negozio Tito sito in via delle frasche con p.iva: 21487128471204, potrai contattarci al 3456732561 [,abbiamo il servizio di indumenti usati] [,abbiamo il servizio di camerini con disponibilità pari a 4] \n"
        // if($this->usedClothesService || ($this->changeRoomNumber > 0)){

        // }

        //|| falso solo se antrmabi sono falsi
        //&& vero solo se entrambi sono veri

        // if($this->usedClothesService && ($this->changeRoomNumber > 0)){
        //     echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrai contattarci al $this->contact, abbiamo il servizio di indumenti usati, abbiamo il servizio di camerini con disponibilità pari a $this->changeRoomNumber \n";
        // }elseif($this->usedClothesService || ($this->changeRoomNumber > 0)){
        //     if($this->usedClothesService){
        //         echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrai contattarci al $this->contact, abbiamo il servizio di indumenti usati";
        //     }elseif($this->changeRoomNumber > 0){
        //         echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrai contattarci al $this->contact, abbiamo il servizio di camerini con disponibilità pari a $this->changeRoomNumber \n";
        //     }else{
        //         echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrai contattarci al $this->contact";
        //     }
        // }


        // if($this->usedClothesService && ($this->changeRoomNumber > 0)){
        //     echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrai contattarci al $this->contact, abbiamo il servizio di indumenti usati, abbiamo il servizio di camerini con disponibilità pari a $this->changeRoomNumber \n";
        // }elseif($this->usedClothesService || ($this->changeRoomNumber > 0)){
        //     if($this->usedClothesService){
        //         echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrai contattarci al $this->contact, abbiamo il servizio di indumenti usati";
        //     }elseif($this->changeRoomNumber > 0){
        //         echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrai contattarci al $this->contact, abbiamo il servizio di camerini con disponibilità pari a $this->changeRoomNumber \n";
        //     }else{
        //         echo "Siamo il negozio $this->name sito in via $this->address con p.iva: $this->piva, potrai contattarci al $this->contact";
        //     }
        // }

        // if($this->usedClothesService && ($this->changeRoomNumber > 0)){

        // }

        // if($this->usedClothesService == false && ($this->changeRoomNumber > 0) == true){

        // }

        // if($this->usedClothesService == true && ($this->changeRoomNumber > 0) == false){

        // }

        // if($this->usedClothesService == false && ($this->changeRoomNumber > 0) == false){

        // }

        if($this->usedClothesService && ($this->changeRoomNumber > 0)){
            //le stampa entrambe
        }elseif($this->usedClothesService){
            //stampa solo la prima
        }elseif(($this->changeRoomNumber > 0)){
            //stampa solo la seconda
        }else{
            //non stampa niente
        }
    }


}

class Concessionaria extends Shop{
    public $spareService;
    public $rentService;
}

//$name,$piva,$address,$products,$contact,$openTime,$usedClothesService,$changeRoomNumber

$zaraProducts = ['Felpa','Gonna','Cappello','Maglione'];

$zara = new Abbigliamento("Zaera", "263746536475647", "via, sparano!", $zaraProducts, "+39 6753241897", "09:00/18:00", false, 0);
//shopPresentation
$zara->shopPresentation();