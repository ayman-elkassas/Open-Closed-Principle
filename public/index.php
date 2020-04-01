<?php

require __DIR__.'/../vendor/autoload.php';

$players=[];

//5 - 5 - 1

//Attackers
for($index=1;$index<5;$index++){
	array_push($players,new Classes\AttackPlayer());
}

//Defensers
for($index=1;$index<5;$index++){
	array_push($players,new Classes\DefensePlayer());
}

//Keeper
array_push($players,new Classes\Goalkeeper());

$match=new Classes\Match($players);
$match->start();