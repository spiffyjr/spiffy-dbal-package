<?php

$main = [
    'user' => 'sqlite',
    'password' => 'sqlite',
    'path' => 'cache/db.sqlite3',
    'driver' => 'pdo_sqlite'
];
$main = isset($_ENV['dbal']['main']) ? $_ENV['dbal']['main'] : $main;

return [
    'dbal' => [
        'main' => $main
    ]
];
