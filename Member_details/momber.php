<?php
	$id = $_GET['mid'];
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$number = $_GET['number'];
	$profession = $_GET['prof'];
	$model = $_GET['model'];
	$year = $_GET['year'];
	$value = $_GET['value'];

	$dbhost="localhost:8088";
	$dbport="27017";
	$conn=new MongoDB\Driver\manager("mongodb://$dbhost:$dbport");
	$collection = $conn->Memberdb->member;
	$result = $collection->insertOne( [ 'id' => $id, 'fname' => $fname ,'lname' => $lname ,'number' => $number ] );
	echo "Inserted with Object ID '{$result->getInsertedId()}'";
?>