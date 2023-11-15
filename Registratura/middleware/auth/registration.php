<?php
require('../../controllers/roles.php');
$db = new roles();
$last_name = $_POST['last_name'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$password = $_POST['password'];

$response = $db->registration(json_encode([
    'last_name'=>$last_name,
    'name'=>$name,
    'father_name'=>$father_name,   
    'password'=>$password,
]));

header('Location: ../../views/auth/auth.php');