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
    $index = json_decode($index, 1);
    $id = (int) $index['id'];
    $index['id'] = $id + 1;
    $index = json_encode($index);
    file_put_contents(DIR.'/data/indexes.json', $index);
    return $id;
}

function getUser(int $id) : ?array
{
    $users = readData();
    foreach($users as $user) {
        if($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function create(string $fName, string $lName, string $accountNum, int $personId) : void
{
    $users = readData();
    $id = getNextId();
    $user = ['id' => $id, 'fName' => $fName, 'lName' => $lName, 'accountNum' => $accountNum, 'personId' => $personId, 'currentAmount' => 0];
    // 2d array, jo sekantis index'as musu sukurtas useris
    $users[] = $user;
    writeData($users);
}

function add(int $id, int $currentAmount) : void
{
    $users = readData();
    $user = getUser($id);
    if(!$user) {
        return;
    }
    $user['currentAmount'] = $currentAmount;
    deleteUser($id);
    
    $users = readData();
    $users[] = $user;
    writeData($users);
}

function deleteUser(int $id) : void
{
    $users = readData();
    foreach($users as $key => $user) {
        if($user['id'] == $id) {
            unset($users[$key]);
            writeData($users);
            return;
        }
    }
};



/*
//  accountNum - LT + 18num    personId - 11num
[
    ['id' => '1', 'name' => 'A', 'surname' => 'B', 'accountNum' => 'LT123456789012345678', 'personId' => '13793847258'],
    ['id' => '2', 'name' => 'C', 'surname' => 'D', 'accountNum' => 'LT123456789012345678', 'personId' => '13793847258'],
]
*/