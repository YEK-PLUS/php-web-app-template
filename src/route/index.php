<?php
$klein = new \Klein\Klein();

$klein->with('/users', __DIR__."/users/index.php");

$klein->dispatch();