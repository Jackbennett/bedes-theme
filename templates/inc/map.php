<?php
$postCode = $_POST['postCode'];
unset($_POST['postCode']);

if(isset($postCode)){
	$postCode = str_replace(" ","+",$postCode);

	header("location: http://maps.google.co.uk/maps?saddr=$postCode&daddr=L39+4TA");
	exit;
}

header("location: http://maps.google.co.uk/maps?daddr=L39+4TA");