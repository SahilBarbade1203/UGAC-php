<?php
$pdo = new PDO("mysql:host=localhost;port=8889;dbname=UGAC","root","root");

// TO HAVE CLEAR AND LOUD TRACE CALL BACK IF ANY FATAL ERROR HAPPENS.
$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

?>
