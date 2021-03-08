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

// function create(string $fName, string $lName, string $accountNum, int $personId) : void
// {
//     $users = readData();
//     $id = getNextId();
//     $user = ['id' => $id, 'fName' => $fName, 'lName' => $lName, 'accountNum' => $accountNum, 'personId' => $personId, 'currentAmount' => 0];
//     // 2d array, jo sekantis index'as musu sukurtas useris
//     $users[] = $user;
//     writeData($users);
// }

function create(string $fName, string $lName, string $personId) : void
{
    $users = readData();
    $id = getNextId();
    $user = ['id' => $id, 'fName' => $fName, 'lName' => $lName, 'accountNum' => createAccountNum(), 'personId' => $personId, 'currentAmount' => 0];
    // 2d array, jo sekantis index'as musu sukurtas useris
    $users[] = $user;
    writeData($users);
    $_SESSION['createUser'] = true;
}



function add(int $id, int $currentAmount) : void
{
    $users = readData();
    $user = getUser($id);
    if(!$user) {
        return;
    }
    if($currentAmount <= 0) {
        $_SESSION['addStatus'] = false;
        return;
    }
    $user['currentAmount'] += $currentAmount;
    deleteUser($id);
    $users = readData();
    $users[] = $user;
    writeData($users);
    $_SESSION['addStatus'] = true;
}

function withdraw(int $id, int $withdraw) : void
{
    $users = readData();
    $user = getUser($id);
    if(!$user) {
        return;
    }
    if($withdraw <= 0) {
        return;
    }
    $currentAmount = $user['currentAmount'];
    $afterWithdraw = (int) $currentAmount - (int) $withdraw;
    $afterWithdraw = (int) $afterWithdraw;
    if($afterWithdraw >= 0) {
        $user['currentAmount'] = $afterWithdraw;
        deleteUser($id);
        $users = readData();
        $users[] = $user;
        writeData($users);
        // $_SESSION['withdrawStatus'] = true;
    }  else {
        // $_SESSION['withdrawStatus'] = false;
        return;
    }
}

function deleteUser(int $id) : void
{
    $users = readData();
    foreach($users as $key => $user) {
        if($user['id'] == $id) {
            unset($users[$key]);
            writeData($users);
            $_SESSION['deleteUser'] = true;
            return;
        } else {
            $_SESSION['deleteUser'] = false;
        }
    }
};

function checkPersonId(int $personId)
{
    if(count($personId) ) {

    }

    // be paskutinio kontrolinio skaiciaus
    // /^[3-6][3-9][0-9](?:0[1-9]|1[012])((?:0[1-9])|(?:1[0-2]))[0-9][0-9][1-9]/
}

function createAccountNum() : string
{
    $checkedNum = '01';
    $bankCode = '88000';
    // $priorAccountNum = '12345678901';
    $randAccNum = '';
    for($i = 0; $i <= 10; $i++) {
        $rand = (string) rand(0, 9);
        $randAccNum .= $rand;
    }
    $accountNum = 'LT' . $checkedNum . $bankCode . $randAccNum;
    $accountNum = (string) $accountNum;
    return $accountNum;
}

function message($result) : void
{
    if($result == true) {
        echo "<p>Operacija atlikta sekmingai!</p>";
    } elseif ($result == false) {
        echo "<p>Ivyko klaida, bandykite dar karta!</p>";
    } else {
        echo '';
    }
}
/*
//  accountNum - LT + 18num    personId - 11num
[
    ['id' => '1', 'name' => 'A', 'surname' => 'B', 'accountNum' => 'LT123456789012345678', 'personId' => '13793847258'],
    ['id' => '2', 'name' => 'C', 'surname' => 'D', 'accountNum' => 'LT123456789012345678', 'personId' => '13793847258'],
]
*/