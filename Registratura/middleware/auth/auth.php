<?php
require('../../controllers/roles.php');
$db = new roles();
$last_name = $_POST['last_name'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$password = $_POST['password'];

$db->login(json_encode([
    'last_name'=>$last_name,
    'name'=>$name,
    'father_name'=>$father_name, 
    'password'=>$password,
]));
session_start();
if($_SESSION['user']->role===3) {
    header('Location: ../../views/auth/index.php');
}
if($_SESSION['user']->role===2) {
    header('Location: ../../views/auth/indexes.php');
}
if($_SESSION['user']->role===1) {
    header('Location: ../../index2.php');
}