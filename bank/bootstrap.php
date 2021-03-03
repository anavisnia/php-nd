<?php
session_start();

define('URL', 'http://localhost/bit/nd1/bank/'); // konstanta string pavidalu
define('DIR', __DIR__.'/'); // savo parasyta konstanta, kuri visada rodys kur mums reikia
require DIR.'app/functions.php';

_pc($_SESSION, 'SESIJA--->');
?>