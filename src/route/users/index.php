<?php
$this->respond('/yunus', function ($request, $response, $service) {
    $name = $request->param('name');
    echo "yunus";
});
$this->respond('/[create|edit:action]', function ($request, $response, $service) {
    $name = $request->param('action');
    $service->render(
        view("home"),
        array(
            'name' => $name,
            "username" => "yek-plus",
            "balance" => "100",
            "firstname" => "yunus",
            "lastname" => "yunus",
            "email" => "me@yek.plus",
            "nested" => array(
                "phone" => "123456789",
                "address" => "123456789",
                "city" => "yek",
                "state" => "yek",
                "zip" => "123456789",
                "country" => "yek",
            )
        )
    );
});
