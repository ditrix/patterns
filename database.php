<?php

function databasePerson(){
//Создаём или открываем базу данных test.db
$db = new SQLite3('peoples.db');

$sql = "DROP TABLE IF EXISTS person";

$db->query($sql);

$sql = "CREATE TABLE person ( id INTEGER PIMARY KEY AUTO_INCREMENT, 
	type TEXT,   
	name TEXT, 
	phone TEXT, 
	email TEXT, 
	note TEXT)";
$smtp = $db->prepare($sql);
$result = $smtp->execute();


$sql = 'INSERT INTO person (id, type, name, phone) VALUES(1,"manager","dmitry","+123456789")';
 $smtp = $db->prepare($sql);
 $result = $smtp->execute();


$sql = 'INSERT INTO person (id, type, name, phone) VALUES(2,"client","alena","alena@mail.com")';
$smtp = $db->prepare($sql);
$result = $smtp->execute();


$sql = 'INSERT INTO person (id, type, name, email) VALUES(3,"manager","alex","+9876543210")';
$smtp = $db->prepare($sql);
$result = $smtp->execute();


$sql = 'INSERT INTO person (id, type, name, phone) VALUES(4,"client","tanya","tan@mail.com)';
//$db->query($sql);
$smtp = $db->prepare($sql);
$result = $smtp->execute();




$sql = "select * from person";


$result = $db->query($sql);


 
while ($row = $result->fetchArray()) {
	echo $row['name']."\n";
}

/*
$sql = 'select * from person where id = 1';
$result = $db->query($sql);

while ($row = $result->fetchArray()) {
	echo $row['name']."\n";
}
*/
$db->close();


}


function getRecord($id){

	$db = new SQLite3('application.db');

	$sql = 'select * from person where id = '.$id;
	$result = $db->query($sql);

	$row = $result->fetch();

	echo $row['name']."\n";
	// while ($row = $result->fetchArray()) {
	// 	echo $row['name']."\n";
	// }

}


databasePerson();