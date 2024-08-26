<?php

// Negozio
// - nome
// - prodotti -> array con qualcosa dentro
// - p.iva
// - contatto
// - numero clienti
// - orari apertura
// - indirizzo
// - valore dei saldi

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

$products = ['Semi di lino','Bacche di goji','Gocce di Bach','Nvidia serie 5000','Bagnoschiuma alle erbe....quelle buone'];

//$name,$piva,$address,$products,$contact,$openTime
$bottegaVerde = new Shop('Bottega verde', '4729247246129214127','via dei platani 41',$products,'+39 4537862130','21:00/4:00');

$bottegaVerde->shopPresentation();
$bottegaVerde->showOpenTime();
//$bottegaVerde->showProducts();

Shop::addSale(15);
echo Shop::$sale;

$bottegaVerde->showProducts();