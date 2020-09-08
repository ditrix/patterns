<?php


class Person {

	public function __construct($name = 'noname'){
		$this->name = $name;

	}

	protected $name;

	public function getName(){
		return $this->name;
	}



	public function setName($name){
		$this->name = $name;
	}

}



/**
 *
 */
class Manager extends Person
{
	
	public function __construct($name,$login,$password)
	{
		parent::__construct($name);
		$this->login = $login;
		$this->password = $password;

	}
	private $login;
	private $password;
	
	public function getLogin(){
		return $this->login;
	}

	public function getPassword(){
		return $this->password;
	}
	
	public function setLogin($login){
		return $this->login = $login;
	}

	public function setPassword($pasword){
		return $this->login = $login;
	}


}


/**
 * 
 */
class Client extends Person
{
	
	public function __construct($name, $email, $phone)
	{
		# code...
		parent::__construct($name);
		$this->$email = $email;
		$this->phone = $phone;
	}

	private $email;
	private $phone;

	public function getEmail(){
		return $this->email;
	}

	public function getPhone(){
		return $this->phone;
	}
	
	public function setEmail($email){
		return $this->email = $email;
	}

	public function setPassword($phone){
		return $this->phone = $phone;
	}


}



$manager = new Manager('dmitry','ditrix','qwerty123');




$client = new Client('alena','alena@mail.com','+3806660222');


$client->Foo();



function getPersonName(Person $person){
	return $person->getName();
}


echo getPersonName($manager)."\n";

echo getPersonName($client);


echo "\nok";
