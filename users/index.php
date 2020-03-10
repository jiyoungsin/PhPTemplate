<?php
use \App\Models\User;

require __DIR__ . '/../bootstrap.php';

$users = User::all();

echo $blade->render('landing', [
    'users' => $users,
]);

// GET REQUEST
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo $blade->render('gallery.create',[
        'site' => $site,
    ]);
    return;
}

// POST REQUEST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    return;
}

//redirect 



/*
$x = 3;

echo $blade->render('landing', [
    'somevar' => $x,
]); 
*/
