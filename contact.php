<?php

if (isset($_POST['submit'])){
	$email = $_POST['email'];

	$mailTo = "twitcherfrost@gmail.com";
	$txt = "".$email." Wants to be notified when website is up and running!";

	mail($mailTo, $email);

}