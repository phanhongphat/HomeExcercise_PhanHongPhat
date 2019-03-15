<?php

abstract class Person
{
	private $firstName;
	private $lastName;
	private $yearOfBirth;

 public function setfirstName($value)
 {
  $this->firstName=$value;
 }
 public function getfirstName()
 {
  return $this->firstName;
 
 }

 public function setlastName($value)
 {
  $this->lastName=$value;
 }
 public function getlastName()
 {
  return $this->lastName;
 }

 public function setyearOfBirth($value)
 {
  $this->yearOfBirth=$value;
 }

  public function getyearOfBirth()
 {
  return $this->yearOfBirth;
 }

}

?>
