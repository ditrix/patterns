<?php


class Person {

	public function __construct($name = 'noname',$type=''){
		$this->name = $name;
		$this->type = $type;
	}

	protected $name;
	protected $type;

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
		parent::__construct($name,"manager");
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
		parent::__construct($name,"client");
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


/**
 *  
 */
abstract class Users
{
 	protected $persons = [];
 	
 	public function addUser(Person $person){
 		$this->persons[] = $person;
 	}

 	abstract public function writePrtsons();

}


/**
 *  
 */
class Clients extends Users
{
	
	function writePrtsons(){
		foreach ($this->persons as $person ) {
			# code...
				echo "client: ".$person->getName().' '.$person->getPhone()."\n";
		}
	}

}

class Managers extends Users {
	function writePrtsons(){
		foreach ($this->persons as $person ) {
			# code...
				echo "client: ".$person->getName().' '.$person->getLogin()."\n";
		}
		
	}

}




//$manager = new Manager('dmitry','ditrix','qwerty123');


//$client = new Client('alena','alena@mail.com','+3806660222');


$clients  = new Clients();
$managers = new Managers();

$clients->addUser(new Client('alena','alena@mail.com','+3806660222'));
$clients->addUser(new Client('tanya','tan@mail.com','++38045678900'));


$managers->addUser(new Manager('dmitry','ditrix','qwerty123'));
$managers->addUser(new Manager('birzul','alex','asdf'));


$clients->writePrtsons();

$managers->writePrtsons();

echo "\nok";
