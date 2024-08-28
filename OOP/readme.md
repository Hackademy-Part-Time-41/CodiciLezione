OOP -> Object oriented programming -> ci aiuta a strutturare il codice in blocchi

DRY -> Dobbiamo esseree fedeli a questo principio

Classificazione -> Mettere insieme tutto ciò che ha delle caratteristiche in comune

Classe -> Descrizione delle caratteristiche principali che un nuovo oggetto deve avere
Oggetto -> Un oggetto è una istanza(qualcosa di concreto da manipolare) di una classe

Attributi e metodi statici
Gli sttributi e metodi statici non lavorano per conto di un oggetto ma per conto di una classe
Richiamo sinstassi:
Classe::$attributo;
Classe::metodo();


Negozio
- nome
- prodotti -> array con qualcosa dentro
- p.iva
- contatto
- numero clienti
- orari apertura
- indirizzo
- valore dei saldi

Ereditarietà
- Singola = Un foglio eredita di un unico padre, un padre può avere più figli
    - Php è a ereditarietà singola
- Multipla = Un figlio eredita da più padre e più padri possono avere più figli

Visibilità dei metodi
Il figlio vede TUTTO quello che è presente nel padre, il padre non ha idea ne di chi siano i figli ne di cosa sono composti

Dominio applicativo
- La porzione di mondo reale che dobbiamo rendere digitale
- Business sul quale dovete lavorare:
    - Banca
    - Pubblica amministrazione
    - Istruzione
    - ......

Aulab
- Docenti
- Studenti

In php il costruttore viene definito Magic Method

MODIFICATORI DI ACCESSO
- public -> Acesso in lettura e scrittura da qualsiasi parte del codice
- private -> Accesso in lettura e scrittura SOLO E SOLTANTO nella classe in cui sono dichiarati
- protected -> Acesso in lettura e scrittura solo dall'interno della classe in cui sono dichiarati ma anche dalle classi figlie

TRAIT
- Ci permettono di creare un set di istruzioni riutilizzabili in qualsiasi classe


Negozi di abbigliamento
Le concessionarie