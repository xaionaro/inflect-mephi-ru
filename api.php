<?php

header('Content-Type: text/plain');

require_once "inflect/Inflect.php";

$inflect = new Inflect();

$text = $_REQUEST['text'];
$case = $_REQUEST['case'];
$command = $_REQUEST['command'];

switch ($command) {
	case 'getAbjectiveGender':
	case 'getNounGender':
	case 'getGender':
		print $inflect->$command($text);
		break;
	case 'getInflectName':
	case 'getInflectAbjective':
	case 'getInflectNoun':
		print $inflect->$command($text, $case);
		break;
}

exit(0);

?>
