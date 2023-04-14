<?php
class Movie {
    public string $name = 'movie-name';
    public string $description = 'movie description';
    public float $duration = -1;

    private int $id = -1; 

    public static $created = 0;
    
    /**
     * __construct
     *
     * @param  mixed $_name
     * @param  mixed $_description
     * @param  mixed $_duration
     * @return void
     */
    function __construct($_name, $_description, $_duration)
    {
        $this ->name = $_name;
        $this ->description = $_description;
        $this ->duration = $_duration;
        self::$created++;
    }
    
    /**
     * getId
     *
     * @return void
     */
    function getId(){
        return $this ->id = rand(1, 100);
    }
    
    /**
     * print
     *
     * @return void
     */
    function print()
    {
        echo $this->name;
        echo $this ->description;
        echo $this ->duration;
    }
}

$badMovie = new Movie('nome-film-1','descrizione-film-1',120); 
$goodMovie = new Movie('nome-film-2','descrizione-film-2', 90);
$bestMovie = new Movie('nome-film-3','descrizione-film-3', 87);

echo 'Id: ', $badMovie->getId();

// $goodMovie->print();
// $badMovie->print();

var_dump($badMovie);
var_dump($goodMovie);

echo 'Film creati: ', Movie::$created;