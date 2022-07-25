<?php
$this->respond('/[:name]', function ($request) {
    return 'Hello ' . $request->name;
});