<?php


class Person {

	function __construct($name = 'noname',$age = 0,$email = 'noname@mail.com'){
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;

	}

	private $name;
	private $age;
	private $email;

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->aeg;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setAge($age){
		$this->age = $age;
	}

	public function setEmail($email){
		$this->email = $email;
	}


}




$person = new Person();

print_r($person);



echo "\nok";
