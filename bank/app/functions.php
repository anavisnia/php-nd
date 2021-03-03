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

function writeData(array $data) : void
{
    $data = json_encode($data); // is stringo i masyva
    file_put_contents(DIR.'data/users.json', $data);
}

function getNextId() : int
{
    if(!file_exists(DIR.'data/indexes.json')) {
        $index = json_encode(['id' => 1]);
        file_put_contents(DIR.'data/indexes.json', $index);
    }
    $index = file_get_contents(DIR.'data/indexes.json');
    $id = (int) $index['id'];
    $index['id'] = $id + 1;
    file_put_contents(DIR.'/data/indexes.json', $index);
    return $id;
}








/*
//  accountNum - LT + 18num    personId - 11num
[
    ['id' => '1', 'name' => 'A', 'surname' => 'B', 'accountNum' => 'LT123456789012345678', 'personId' => '13793847258'],
    ['id' => '2', 'name' => 'C', 'surname' => 'D', 'accountNum' => 'LT123456789012345678', 'personId' => '13793847258'],
]
*/