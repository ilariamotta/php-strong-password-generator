<?php 

function passwordGenerator($passlength, $chars) {
      $password = "";
for($i = 0; $i < $passlength; $i++) {
    $element = random_int(0, strlen($chars) - 1);
    $password .= $chars[$element];
}
    return $password;
}




$_SESSION["password"] = $password ?? "";

?>