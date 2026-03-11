<?php 

function passwordGenerator($passlength, $chars, $symbols, $uppercases, $numbers) {
      $password = "";
        $params="";

if (isset($_GET["symbols"])) {
    $params .= $symbols;
}

if (isset($_GET["uppercases"])) {
    $params .= $uppercases;
}

if (isset($_GET["numbers"])) {
    $params .= $numbers;
}

$chars .= $params;


for($i = 0; $i < $passlength; $i++) {
    $element = random_int(0, strlen($chars) - 1);
    $password .= $chars[$element];
}
    return $password;
}






?>