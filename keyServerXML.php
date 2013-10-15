<?php
	include_once 'ckeygen.php';
	header("Content-Type:text/xml");
	$kg = new ckeygen();
	echo $kg->keyAsXML();
?>