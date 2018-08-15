<?php
class Person{
    private $firstName;
    private $lastName;
    private $height;
    private $weight;
    private $birthday;
   
 public function __construct($firstName,$lastName,$height,$weight,$birthday){
     $this->firstName=$firstName;
     $this->lastName=$lastName;
     $this->height=$height;
     $this->weight=$weight;
     $this->birthday=$birthday;
 }
public function getFirstName(){
  return $this->firstName;
}
public function getLastName(){
  return $this->lastName;
}
public function getHeight(){
  return $this->height;
}
public function getWeight(){
  return $this->weight;
}
public function getBirthday(){
  return $this->birthday;
}
}