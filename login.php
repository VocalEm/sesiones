<?php

session_start();
$users = [
    array(
        "username" => "VocalEm",
        "email" => "EmilianoFrias@Gmail.com"
    ),

    array(
        "username" => "Fercho",
        "email" => "Fercho@Gmail.com"
    )
];

$user = $_GET["user"] ?? "";

echo "Usuario elegido es: {$users[$user]["username"]}";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
