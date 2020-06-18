<?php
session_start();

$data = [
        ['name' => 'Julius', 'pass' => md5('123')],
        ['name' => 'AloYzas', 'pass' => md5('123')],
];

// $data = json_decode(file_get_contents(__DIR__ .'/data.json'),1);

