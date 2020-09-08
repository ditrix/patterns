<?php

/*
HERE  https://anton.shevchuk.name/php/php-traits/

*/

trait PersonMethods {
	function correctLogin($_login){

//		print('PersonMethods '.$_login);
		if($_login == 'noname'){
			return false;
		}
		return true;	
	}
}



class Person {

	use PersonMethods;

	public function __construct($name = 'noname',$type=''){
		$this->name = $name;
		$this->type = $type;
	}

	protected $name;
	protected $type;

	protected $year; // дата рождения 
	protected $age;  // возраст (расчетная величина)

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}
}

/*------------------------*/
//$dima = new Person('dima','boss');
//print($dima->getName());

class Hello {
	public function sayHello(){
		print('Hwllo ');
	}
}



class Client {
	use PersonMethods;	

}

$person = new Person('dima');
var_dump( $person->correctLogin( $person->getName() ) );


$client = new Client();
var_dump( $person->correctLogin('noname' ) ); 


print("\nOk");
