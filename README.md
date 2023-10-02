# Guida all'ereditarietà e al polimorfismo in PHP

In questo esempio, utilizzeremo le classi `Production`, `Movie` e `TvSeries` per illustrare come implementare l'ereditarietà e il polimorfismo in PHP.

TUTTI I FILE SONO STATI AGGIUNTI DENTRO UNA CARTELLA MODELS -> PRODUCTION.PHP
MOVIE.PHP,TVSERIES.PHP
INDEX.PHP ->FILE INVIDUALE CHE STAMPA I NUOVI OGGETTI :

```php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/TvSerie.php';

$production = new Production('Proiezione', 'James Cameron', 1997);
$movie      = new Movie('Row', 'Johnny Deep', 1996, 1999, 120);
$tvSeries   = new TvSeries('Vikings', 'Gabriel Losky', 2008, 2009, 2020, 250, 6);

```

## Classi di base

### Production

La classe `Production` è la classe di base per tutti i tipi di produzioni (film e serie TV) ed è definita nel file `Production.php`.

- Proprietà:
  - `title` - il titolo della produzione.
  - `director` - il regista della produzione.
  - `year` - l'anno di uscita della produzione.

La classe `Production` ha il metodo `getDetails()` che restituisce una stringa con i dettagli di base della produzione.

### Movie

La classe `Movie` eredita dalla classe `Production` ed è definita nel file `Movie.php`.
NON DIMENTICARSI DI INTRODURRE IL FILE GENITORE DENTRO FILE FIGLIO :
require_once **DIR** . '/Production.php';
AGGIUNGERE EXTENDS PER POTER USARE LE PROPRIETA DEL PADRE DENTRO IL FIGLIO !
class Movie extends Production

Questa classe rappresenta un film e contiene ulteriori proprietà specifiche per i film, come `published_year` (anno di pubblicazione) e `running_time` (durata).

- Proprietà aggiuntive:
  - `published_year` - l'anno di pubblicazione del film.
  - `running_time` - la durata del film in minuti.

La classe `Movie` sovrascrive il metodo `getDetails()` ereditato dalla classe `Production` per aggiungere le informazioni specifiche dei film.

## Ereditarietà

L'ereditarietà in PHP consente a una classe di ereditare le proprietà e i metodi da una classe genitore. La classe figlia può aggiungere nuove proprietà e metodi o sovrascrivere quelli ereditati.

Ad esempio, la classe `Movie` eredita dalla classe `Production` e aggiunge le proprietà `published_year` e `running_time`.

## Polimorfismo

Il polimorfismo è la capacità di oggetti di classi diverse di rispondere allo stesso metodo in modo diverso. Nel nostro esempio, sia `Movie` che `TvSeries` implementano il metodo `getDetails()`, ma ognuno lo fa in modo specifico per il suo tipo di produzione.

## Utilizzo

Nel file `index.php`, abbiamo creato un array `$productions` che contiene istanze di `Production`, `Movie` e `TvSeries`. Si puo iterare su questo array e chiamare il metodo `getDetails()` per ottenere i dettagli specifici di ciascuna produzione, sfruttando il polimorfismo.

```php
foreach ($productions as $production) {
    echo $production->getDetails();
}
```
