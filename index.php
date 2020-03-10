<?php
use \App\Models\User;

require __DIR__ . '/bootstrap.php';

$users = User::all();

echo $blade->render('landing', [
    'users' => $users,
]);


/*
$x = 3;

echo $blade->render('landing', [
    'somevar' => $x,
]); 
*/
