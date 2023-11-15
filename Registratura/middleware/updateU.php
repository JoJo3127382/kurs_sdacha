<?php
require_once('../controllers/User.php');
$db = new User();
$id_users = $_POST['id_users'];
$role = $_POST['role'];
$last_name = $_POST['last_name'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$response = $db->updateU(json_encode([
    'id_users'=>$id_users,
    'role'=>$role,
    'last_name'=>$last_name,
    'name'=>$name,
    'father_name'=>$father_name,
]));

header('Location: ../index2.php?message='.json_decode($response)->message);

