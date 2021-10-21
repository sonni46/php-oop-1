<?php
 class Movie {
     public $name;
     public $year;
     public $genre;

     function __construct($_name,$_year,$_genre) {
         $this->name = $_name;
         $this->year = $_year;
         $this->genre = $_genre;

     }
     public function getName($_name) {
        return $this->name;

     }
     public function getYear($_year) {
        return $this->year;

     }
     public function getGenre($_genre) {
        return $this->genre;
     }
     public function setName($_name) {
        $this->name = $_name;

     }
     public function setYear($_year) {
        $this->year = $_year;

     }
     public function setGenre($_genre) {
        $this->genre = $_genre;

     } 
 }

 $babyBoss =  new Movie ("Baby Boss", 2017,"comico");
 echo $babyBoss->name . "<br>";
 echo $babyBoss->year . "<br>";
 echo $babyBoss->genre . "<br>";
 echo $babyBoss->setName("nessuno");
 echo $babyBoss->setYear("1561");
 echo $babyBoss->setGenre("null");
 echo $babyBoss->name . "<br>";
 echo $babyBoss->year . "<br>";
 echo $babyBoss->genre . "<br>";



?>