<?php

class Movie {
    public $title;
    public $plot;
    public $releaseYear;
    public $rating;
    public $topMovie; //true or false
    
    /**
     * Constructor
     */

    function __construct($title, $plot, $releaseYear = 'NA') {
        $this->title = $title;
        $this->plot = $plot;
        $this->releaseYear = $releaseYear;
    }

    /**
     * set rating
     */
    public function SetRating($rating) {
        $this->rating = $rating;
        if ($rating >= 8) {
            $this->topMovie = True;
        } else {
            $this->topMovie = False;
        }
    }

    
    
};

// INSTANCE 1
$film1 = new Movie(
    'Ritorno al futuro',
    'Marty McFly parte dal 1985 sulla DeLorean: quando finisce per sbaglio nel 1955, deve lottare contro il tempo per fare in modo che i suoi futuri genitori si innamorino.',
    1985
);

$film1->SetRating(10);

var_dump($film1);


// INSTANCE 2
$film2 = new Movie(
    'Tremors',
    'Stanchi della monotona vita nella sperduta cittadina di Perfection in Nevada, i giovani Valentine McKee ed Earl Bassett decidono di partire per cercare fortuna altrove. Tuttavia, appena iniziato il loro viaggio, i due scoprono lungo la strada alcuni cadaveri, uccisi da misteriose creature provenienti dal sottosuolo.',
);

$film2->SetRating(4);

var_dump($film2);


