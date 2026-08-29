<?php

header('Content-Type: application/json');

$user = array(
    "id" => 24174980,
    "name" => "Marife Deonila",
    "email" => "deonilamarife5@gmail.com",
    "status" => "active"
);

echo json_encode($user);

?>
