<?php

class Zodiac{
    // DateTime $date - stores birthdate
    protected $date; 

    // Array $signs - list of sun signs
    protected $signs = array(
        array('name' => 'aries',      'unicode' => '♈', 'start' => '03-21', 'end' => '04-20'),
        array('name' => 'taurus',     'unicode' => '♉', 'start' => '04-21', 'end' => '05-21'),
        array('name' => 'gemini',     'unicode' => '♊', 'start' => '05-22', 'end' => '06-21'),
        array('name' => 'cancer',     'unicode' => '♋', 'start' => '06-22', 'end' => '07-22'),
        array('name' => 'leo',        'unicode' => '♌', 'start' => '07-23', 'end' => '08-23'),
        array('name' => 'virgo',      'unicode' => '♍', 'start' => '08-24', 'end' => '09-23'),
        array('name' => 'libra',      'unicode' => '♎', 'start' => '09-24', 'end' => '10-23'),
        array('name' => 'scorpio',    'unicode' => '♏', 'start' => '10-24', 'end' => '11-22'),
        array('name' => 'sagittarius','unicode' => '♐', 'start' => '11-23', 'end' => '12-21'),
        array('name' => 'capricorn',  'unicode' => '♑', 'start' => '12-22', 'end' => '12-31'),
        array('name' => 'aquarius',   'unicode' => '♒', 'start' => '01-21', 'end' => '02-19'),
        array('name' => 'pisces',     'unicode' => '♓', 'start' => '02-20', 'end' => '03-20'),
        array('name' => 'capricorn',  'unicode' => '♑', 'start' => '01-01', 'end' => '01-20'),
    );

    // Array $fortunes - list of one-line fortunes
    protected $fortunes = [
        "Your day will be good.",
        "A big promotion is on your way.",
        "Things are looking to take a turn for the best.",
        "You should be aware of your friends.",
        "A Good week to start something new."
    ]; 

    // constructor with a single parameter(String $date)
    function __construct($date) {
        $this->date = new DateTime($date); // new object of DateTime
    }

    // prints the birthdate as Locale Date String with format d-m-Y
    function printDate(){
        echo $this->date->format('d-m-Y');
        echo "<br>";
    }

    // return the Sun Sign based on birthdate
    function findSign(){
        $date = $this->date->getTimestamp(); // raw form date is nothing but, timestamp  18903232
        $year = $this->date->format('Y');

        foreach ($this->signs as $sign) {
            $start = strtotime($year.'-'.$sign['start']);       
            $end = strtotime($year.'-'.$sign['end']);   
            
            if($date >= $start && $date <= $end){
                return $sign;
            }
        }
    }

    // return a random one-line horscope from $fortunes
    function findFortune(){
        $index = rand(0, sizeof($this->fortunes) - 1); // - 1 is used to prevent array index overflow
        return $this->fortunes[$index];
    }
}