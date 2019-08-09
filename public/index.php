<?php require '../includes/header.php'?>

<?php 
	use Twilio\Rest\Client;

?>

<?php

    if(isset($_POST['submit'])){


            if(isset($_POST['number']) && isset($_POST['message'])){


                $client = new Client($config['account_sid'], $config['auth_token']);
                
                $client->messages->create(
                    // Where to send a text message (your cell phone?)
                    $_POST["number"],
                    array(
                        'from' => $config['phone_number'],
                        'body' => $_POST["message"]
                    )
                );





                echo "<h3 class='text-center bg-success'>Message has been sent</h3>";


           }

    }




?>




<div class="col-sm-6 col-sm-offset-3">


    <form role="form" method="POST">
        <div class="form-group">
            <label for="email">Phone Number</label>
            <input name="number" type="tel" class="form-control" id="email" required placeholder="Enter number">
        </div>
        <div class="form-group">
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <input name="submit" type="submit" class="btn btn-primary btn-block" value="Send Message">
    </form>


</div>





<?php require '../includes/footer.php'?>
