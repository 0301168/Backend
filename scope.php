<?php
//Lokale variablen worden zelf aangeroepen etc zoals:
$var = 'test';

echo $var.'<br>';
// geeft 'test <br>' weer aan de browser

//Global variables zijn standaard al aangemaakt zoals REMOTE_ADDR voor een user ip
$var = $_SERVER["REMOTE_ADDR"];

echo $var.'<br>';
// geeft de gebruiker zijn IP adres weer, op localhost werkt dit echter niet.
?>