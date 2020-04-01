<?php

require __DIR__.'/../vendor/autoload.php';

$players=[];

for($index=1;$index<12;$index++){
	array_push($players,new Classes\Player());
}

$match=new Classes\Match($players);
$match->start();