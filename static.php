<?php
 //include("database.php");


$dsn="sqlite:peoples.db";
$pdo = new PDO($dsn,null,null);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//print_r($pdo);
//die;

class Person {

	function __construct($name = 'noname'){
		$this->name = $name;

	}

	private $type; 

	private $name;

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}


	public static function getInstance($id){

		$db = new SQLite3('peoples.db');

		$sql = 'select * from person where id = '.$id;
		$result = $db->query($sql);

		while ($row = $result->fetchArray()) {
			if($row['type'] === "client"){
				$person = new Client($row['name'],$row['email']);
				return $person;		
			}else{
				$person = new Manager($row['name'],$row['phone']);
				return $person;
			}
		}
//		print_r($person);
		return;		
	}


	public static function getRow($id,$pdo){
		$sql = 'SELECT * FROM person WHERE id = '.$id;
		$smtp = $pdo->prepare($sql);

		$result = $smtp->execute();
		$row = $smtp->fetch();

		if($row['type'] === "client"){
			$person = new Client($row['name'],$row['email']);
				return $person;		
			}else{
				$person = new Manager($row['name'],$row['phone']);
				return $person;
			}


		return;
	}

}



/**
 *
 */
class Manager extends Person
{
	
	function __construct($name,$phone)
	{
		# code...

		
		parent::__construct($name);
		$this->type = 'manager';
		$this->phone = $phone;
	}

//	public functio

	private $phone;

	public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
 	}

}


/**
 * 
 */
class Client extends Person {

	
	public function __construct($name, $email)
	{
		# code...
		parent::__construct($name);
		$this->$email = $email;
		$this->type = 'client';

	}
	private $email;
		

	public function getEmail(){
		return $this->email;
	}

}


$manager = new Manager('dmitry','+3812345678');
print_r($manager);

$client = new Client('alena','client@mail.com');
print_r($client);

$data = Person::getRow(1,$pdo);
print_r($data);

$data = Person::getRow(4,$pdo);
print_r($data);


/*----------------------*/
echo "\nok";
