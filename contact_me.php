

<?php

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "anna.tyan@hotmail.com";
$headers = "From: ". $mailFrom;
$txt = "You have received a new message from your website contact form." .$name.".\n\n.$message; 

mail($mailTo, $txt, $headers);
header("Location: index.php?mailsend");


}
?>
