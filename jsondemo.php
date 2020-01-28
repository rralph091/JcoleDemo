<?php
$jsonjoke = file_get_contents('https://sv443.net/jokeapi/category/Programming');
$jsonqoutes = file_get_contents('https://programming-quotes-api.herokuapp.com/quotes');

$jokedata = json_decode($jsonjoke,true);
$qoutesdata = json_decode($jsonqoutes,true);

//include a name for the qoutes decoded result for easy access
$qoutes = array('qoutes'=> $qoutesdata);
//create result list
$list = $qoutes['qoutes'];

?>
