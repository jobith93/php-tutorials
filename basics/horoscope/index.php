<?php
    // imports
    require 'Zodiac.php'; 

    //main
    $date = $_GET['date']; // string 2012-10-25 from the url
    $zodiac = new Zodiac($date); //new object for Zodiac class
    
    $mysign = $zodiac->findSign();
    $fortune = $zodiac->findFortune();

    echo "my sign is ".$mysign['name']." ".$mysign['unicode']." Your fortune: ".$fortune;