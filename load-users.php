<?php

$collection = (new MongoClient())->selectDb('test')->selectCollection('users');

$users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);

foreach ($users as $user) {
    $collection->insert($user);
}


