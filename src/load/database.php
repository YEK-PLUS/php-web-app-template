<?php
use Medoo\Medoo;

$db = new Medoo([
    'type' => 'mysql',
    'host' => $_ENV["DB_HOST"],
    'database' => $_ENV["DB_NAME"],
    'username' => $_ENV["DB_USERNAME"],
    'password' => $_ENV["DB_PASSWORD"],
    'port' => $_ENV["DB_PORT"]
]);
