<?php
	$dbhost="localhost:8088";
	$dbport="27017";
	$conn=new MongoDB\Driver\manager("mongodb://$dbhost:$dbport");
//	print_r($conn);

	require "vendor/autoload.php"; // include Composer's autoloader
	$client = new MongoDB\Client("mongodb://localhost:27017");
	$collection = $client->Student1->s1;
//Insert
//	$result = $collection->insertOne( [ 'rollno' => 07, 'name' =>
//	'zeel' ,'department' => 'IC'] );
//	echo "Inserted with Object ID '{$result->getInsertedId()}'";
//find all.
//	$cursor = $collection->find();
//	foreach ($cursor as $document) 
//	{
//		print_r($document);
//	}
//find one
	$cursor = $collection->findOne(['Rollno'=>33]);
	var_dump($cursor);

?>