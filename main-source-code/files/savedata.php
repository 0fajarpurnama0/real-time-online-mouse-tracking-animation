<?php
	$data = array(
		'$name' => $_POST['$name'],
		'$email' => $_POST['$email'],
		'$date' => $_POST['$date'],
		'$x' => $_POST['$x'],
		'$y' => $_POST['$y'],
		'$duration' => $_POST['$duration'],
		'$current_url' => $_POST['$current_url'],
		'$ip_address' => $_POST['$ip_address'],
		'$samplingmode' => $_POST['$samplingmode'],
		'$leftclick' => $_POST['$leftclick'],
		'$rightclick' => $_POST['$rightclick'],
		'$middleclick' => $_POST['$middleclick'],
		'$keyboardtype' => $_POST['$keyboardtype'],
		'$scrollleft' => $_POST['$scrollleft'],
		'$scrolltop' => $_POST['$scrolltop'],
		'$windowwidth' => $_POST['$windowwidth'],
		'$windowheight' => $_POST['$windowheight'],
		'$restrictedfocusviewer' => $_POST['$restrictedfocusviewer'],
		'$bubbleview' => $_POST['$bubbleview'],
		'$fingertracinglearningsystem' => $_POST['$fingertracinglearningsystem'],
		'$cursorreminder' => $_POST['$cursorreminder'],
		'$transparency' => $_POST['$transparency'],
		'$magnifier' => $_POST['$magnifier'],
		'$textcolor' => $_POST['$textcolor'],
		'$backgroundcolor' => $_POST['$backgroundcolor']
	);
	$file = end($data['$name']).end($data['$date']).'.json';
	file_put_contents($file, json_encode($data));
?>