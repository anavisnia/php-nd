<?php
$users = [
    ['fName' => '', 'lName' => '', 'accountNum' => '', 'personId' => ''],
];

file_put_contents('users.json', json_encode($users));