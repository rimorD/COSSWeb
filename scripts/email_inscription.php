<?php 
if(isset($_POST['submit'])){
    // $to = "rebeldegorrino@gmail.com";
	$to = "davidferreirofernandez@outlook.es";
    $from = $_POST['email'];
    $subject = "Nueva inscripción al COSS";
	
	$cmdrName = "Nombre de comandante: " . $_POST['cmdrName'] . "\n";
	
	$nativeSystem = "";
	if(isset($_POST['nativeSystem'])){
		$nativeSystem = "Sistema natal: " . $_POST['nativeSystem'] . "\n";
	}
	
	$mainRole = "Rol principal: " . $_POST['role'] . "\n";

	$secondaryRole = "";
	if(isset($_POST['secondRole'])){
		$nativeSystem = "Rol secundario: " . $_POST['secondRole'] . "\n";
	}

	$ship = "Nave principal: " . $_POST['ship'] . "\n";

	$secondShip = "";
	if(isset($_POST['secondShip'])){
		$nativeSystem = "Nave secundaria: " . $_POST['secondShip'] . "\n";
	}

	$combatRank = "\nRango de Combate: " . $_POST['combatRank'] . "\n";
	$tradeRank = "Rango de Comercio: " . $_POST['tradeRank'] . "\n";
	$explorationRank = "Rango de Exploración: " . $_POST['explorationRank'] . "\n";
	$pvpRank = "Rango de Combate (PVP): " . $_POST['pvpRank'] . "\n";

	$active = "\n¿Es un jugador activo? " . $_POST['active'] . "\n";
	$discord = "¿Tiene discord? " . $_POST['discord'] . "\n";
	$telegram = "¿Tiene telegram? " . $_POST['telegram'] . "\n";

	$fuente = "\n¿Cómo nos conoció? " . $_POST['fuente'] . "\n";
	
	$interes = "\n¿Por qué quiere ser miembro? " . $_POST['interes'] . "\n";

    $message = $from . " desea inscribirse al COSS, sus datos son los siguientes:\n\n" . $cmdrName 
	. $nativeSystem . $mainRole . $secondaryRole . $ship . $secondShip . $combatRank . $tradeRank 
	. $explorationRank . $pvpRank . $active . $discord . $telegram . $fuente . $interes;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: ../index.html');
    }
?>