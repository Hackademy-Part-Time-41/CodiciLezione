Client -> Html,css,js
Server -> PHP

Php
- Hypertext preprocessor
- Prima Personal home page

Linguaggi intepretati e linguaggi compilati (fanno parte del linguaggio gli intepreti e i compilatori)
- Interpretati
    - Vuol dire che entra in gioco un inteprete che legge il codice, lo intepreta e lo esegue
    - E se c'è un errore?
        - Gli errori vengono mostrati a run-time (solo se il programma è in esecuzione)

    - Php è un linguaggio intepretato

- Compilati
    - Vul che entra in gioco un compilatore
    - Il compilatore legge tutto il codice, riga per riga, ma se c'è un errore questo non verrà mai avviato
    - Gli errori vengono scovati a compile-time

Altre caratteristiche di php
- Ci permetterà di interagire con un database
- Ci permtterà di creare delle sessioni (Interazione di un utente con il nostro applicativo)
- LE sessioni sono mantenute attive da quelli che vengono chiamati cookies
- Il web lavora con il concetto di stateless (Assenza di stato)
- Il web lavora con il concetto di connectionless
- Può criptare le password e lo fa in auatomatico
- Supporti vari protocolli
  - Protocollo non è altro che un insieme di regole affinchè due antità possano comunicare fra di loro
  - SMTP, POP3, HTTP
- Ci permette di gestire dati inseriti nei FORM

PHP essendo nato per il web in realtà anche lui possiede un tag di apertura ed un tag di chiusura.
In un file con estensione ".php" è possibile scrivere anche codice html, non vale l'inverso, cioè che in un file con estesione ".html" si possa scrivere del codice php


Il tag di chiusura del codice php non è necessario utilizzarlo se stiamo scrivendo SOLO codice php

Built-inf
- E' una funzione che ci viene data insieme al linguaggio

Array = LISTA ORDINATA DI ELEMENTI (ORDINATA IN BASE AD UN INDICE)
Gli indici di un array partono da 0


FUNZIONI
- Una funzione è una astrazione che ci permette di etrarre un pezzo di codice, incapsularlo per poi richiamarlo quando ne abbiamo bisogno. Facendo attenzione però che questo blocco di codice sia più generico possibile.

ASTRATTO = GENERICO

DRY = Don't repeat yourself

BUILT-IN FUNCTION & USER FUNCTION

BUILT-IN FUNCTION -> Sono le funzioni che ci vengono date dal linguaggio di programmazione che stiamo utilizzando e che non è necessario capirne l'implementazione ma ci servono semplicemente per il risultato che ci restituiscono.

USER FUNCTION -> Sono le funzioni che creiamo noi

Le funzioni prendono anche il nome di METODI
Quando dichiariamo una funzione ed inseriamo il codice al suo interno si dice che stiamo istruendo la logica

ATTENZIONE
- Nelle funzioni la posizionalità dei paramteri è fundamentale

SCOPE E VISIBILITà
In php le funzioni hanno scope locale, tutto ciò che è al loro interno non è visibile all'esterno A MENO CHE NON LO FACCIO USCIRE, di contro tutto ciò che è all'esterno della funzione non è visibile al suo interno A MENO CHE NON LO FACCIO ENTRARE

LE COSTANTI hanno SCOPE GLOBALE

EXTRACT -> Estraiamo un blocco di codice
INCAPSULATE -> Lo incapsuliamo all'interno di una funzione
ABSTRACT -> Lo rendiamo generico