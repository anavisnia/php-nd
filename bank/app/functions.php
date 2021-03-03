<?php
//nuskaitom duomenis is JSON
function readData() : array //funkcija privalo grazinti array
{
    if(!file_exists(DIR.'data/users.json')) {
        $data = json_encode([]);
        file_put_contents(DIR.'data/users.json', $data);
    }
    $data = file_get_contents(DIR.'data/users.json');
    return json_decode($data, 1);
}