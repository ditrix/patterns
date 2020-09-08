<?php

/**
 *  
 */
abstract class DomainName
{
	private $className = '';


	public function getClassName()
	{
		return $this->className;
	}	

	public function setClassName($className)
	{	
		$this->className = $className;
	}
	
	public static function create()
	{
		return new static();
	}

}


/**
 * 
 */
class User extends DomainName
{


	function __construct($argument = 'is User')
	{
		# code...
		///$this->className = $argument;
		$this->setClassName($argument);
	}

}


/**
 * 
 */
class Document extends DomainName
{
	
	function __construct($argument = 'is Document')
	{
		# code...
		$this->setClassName($argument);
	}


}


$user = User::create();
print($user->getClassName());
print("\n");

//$docu
$document = Document::create();
print($document->getClassName());

print("\nOk");