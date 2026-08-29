<?php

$json = '{"name":"Marife Deonila","age":21,"email":"deonilamarife5@gmail.com"}';

$object = json_decode($json);


$array = json_decode($json, true);

echo "Object: " . $object->name . "<br>";
echo "Array: " . $array["email"];

?>
