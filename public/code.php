<?php require '../includes/header.php'?>

<?php 
	use Twilio\Rest\Client;

?>


<?php 


	$client = new Client($config['account_sid'], $config['auth_token']);

    $_SESSION['code'] = $code = uniqid();
    
    $con->query("INSERT INTO verifications(code) VALUES('$code')");



    try {
    	
		$client->messages->create(
		    // Where to send a text message (your cell phone?)
		    '+8801885544345',
		    array(
		        'from' => $config['phone_number'],
		        'body' => $code
		    )
		);
    } catch (Services_Twilio_RestException $e) {

    	die('sorry Could not connect because'.$e->getMessage());
    	
    }
	


    echo "<h3 class='text-center bg-success'>Your Code has been sent</h3>";



?>



<?php require '../includes/footer.php'?>


