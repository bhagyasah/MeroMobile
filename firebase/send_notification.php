<?php


$title = $_POST['title'];
$message = $_POST['message'];
$token = "dUL5Ry8oo3g:APA91bH3VrHjeKFCqVtFDItmkBGNKRaWIb8_MY8vxmP_ZlBjpAZwIpgFJ1sZcUyP-QrQ2bWcRrBt29NghbHA7ePc_047wpI6z-ErW6X9euSWfPbPyqEzkWXhKXvmxkUK7AQjd77kM3TR";

define( 'API_ACCESS_KEY', 'AAAAaPnH52I:APA91bHcpyCcALhFgSMgNN_yY-tKZYEE6TbADXvmds_zLZGG0Qr5jPrHjkOL7TEyAfPS7T9bQ-vSNkPm3j-hepuApfECJSg5PDNyqMETAdP6a39ygR4Y0YqRSAIwEq6YBdy3zWyZ1HpI');
 //   $registrationIds = ;
#prep the bundle
  //    $msg = array
  //         (
		// 'body' 	=> $message,
		// 'title'	=> $title,
             	
  //         );

$datamsg = array( 

     'body' => $message,
     'title' =>$title
	);
	$fields = array
			(
				'to' => $token,
			//	'notification'=> $msg,
				'data' =>$datamsg
			);
	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		echo $result;
		curl_close( $ch );
?>