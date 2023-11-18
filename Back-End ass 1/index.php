<?php

$userdetails = array(
    "15/30gr001"=>array(
        "firstname"=>"Faridat",
        "lastname"=>"Bello",
        "age"=>5,
        "cars"=>array("Benz","Rangerover",'Toyota','BMW'),
    ),


    "15/30gr002"=>array(
        "firstname"=>"Mohammed",
        "lastname"=>"Yusuf",
        "age"=>10,
    ),


);

$user = "15/30gr001";

$userdetails[$user]['firstname']='Zahra';

print "Welcome, " . $userdetails[$user]['firstname'] . " " .  $userdetails[$user]['lastname'];


print ".<br>You have the following cars:<br>";

foreach ($userdetails[$user]['cars'] as $x) print "$x<br>";




?>