<?php

$name = $_POST['name'];
$email = $_POST['email'];

sleep(5);

echo json_encode([
    "data" => [
        "name" => $name,
        "email" => $email
    ],
    "status" => 200
]);
