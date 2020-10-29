<?php

    class Zodiac{
        protected $date; 
        protected $signs = array(
            array('name' => 'aries', 'unicode' => '♈', 'start' => '03-21', 'end' => '04-20'),
            array('name' => 'taurus', 'unicode' => '♉', 'start' => '04-21', 'end' => '05-21'),
            array('name' => 'gemini', 'unicode' => '♊', 'start' => '05-22', 'end' => '06-21'),
            array('name' => 'cancer', 'unicode' => '♋', 'start' => '06-22', 'end' => '07-22'),
            array('name' => 'leo', 'unicode' => '♌', 'start' => '07-23', 'end' => '08-23'),
            array('name' => 'virgo', 'unicode' => '♍', 'start' => '08-24', 'end' => '09-23'),
            array('name' => 'libra', 'unicode' => '♎', 'start' => '09-24', 'end' => '10-23'),
            array('name' => 'scorpio', 'unicode' => '♏', 'start' => '10-24', 'end' => '11-22'),
            array('name' => 'sagittarius', 'unicode' => ' ♐', 'start' => '11-23', 'end' => '12-21'),
            array('name' => 'capricorn', 'unicode' => '♑', 'start' => '12-22', 'end' => '12-31'),
            array('name' => 'aquarius',  'unicode' => '♒', 'start' => '01-21', 'end' => '02-19'),
            array('name' => 'pisces',  'unicode' => '♓', 'start' => '02-20', 'end' => '03-20'),
            array('name' => 'capricorn', 'unicode' => '♑', 'start' => '01-01', 'end' => '01-20'),
        );
        protected $fortunes = []; 

        // constructor
        function __construct($date) {
            $this->date = new DateTime($date); // new object of DateTime
        }

        function printDate(){
            echo $this->date->format('d-m-Y');
            echo "<br>";
        }

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
    }


    //main
    $date = $_GET['date']; // string 2012-10-25 from the url
    $zodiac = new Zodiac($date); //new object for Zodiac class
    
    $mysign = $zodiac->findSign();

    echo "my sign is ".$mysign['name']." ".$mysign['unicode'];