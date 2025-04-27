<?php

$mesControllers = [
    "security" => "../controller/security.controller.php",
    "resbibilio" => "../controller/resbibilio.controller.php",
    "adhe" => "../controller/adhe.controller.php",
    "notfound" => "../controller/notfound.controller.php",
];

function handleController(string $controller = "security")
{
    global $mesControllers;
    if (array_key_exists($controller, $mesControllers)) {
        if (file_exists($mesControllers[$controller])) {
            require_once $mesControllers[$controller];
        } else {
            redirection("notfound", "error");
        }
    } else {
        redirection("notfound", "error");
    }
}
