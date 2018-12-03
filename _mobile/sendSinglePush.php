<?php 
//importing required files 
require_once 'DbOperation.php';
require_once 'Firebase.php';
require_once 'Push.php'; 

$db = new DbOperation();

$response = array(); 

//checking the required params 
if(isset($title) and isset($message) and isset($username)) {

	//creating a new push
	$push = null; 

	//first check if the push has an image with it
	if(isset($image)){
		$push = new Push(
				$title,
				$message,
				$image
			);
	}else{
		//if the push don't have an image give null in place of image
		$push = new Push(
				$title,
				$message,
				null
			);
	}

	//getting the push from push object
	$mPushNotification = $push->getPush(); 

	//getting the token from database object 
	$devicetoken = $db->getTokenByUsername($username);

	//creating firebase class object 
	$firebase = new Firebase(); 

	//sending push notification and displaying result 
	echo $firebase->send($devicetoken, $mPushNotification);

}else{
	$response['error']=true;
	$response['message']='Parameters missing';
}

echo json_encode($response);

?>