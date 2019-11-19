<?php 
if(isset($_POST['submit'])){
    // $to = "rebeldegorrino@gmail.com";
	$to = "davidferreirofernandez@outlook.es";
    $from = $_POST['email'];
    $subject = "Nuevo mensaje";
    $message = $from . " envía el siguiente mensaje:" . "\n\n" . $_POST['msg'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: ../index.html');
    }
?>