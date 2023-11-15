<?php
require_once ('../controllers/User.php');
$db = new User();
$id_users = $_POST['id_users'];

$res = $db->deleteUser(json_encode([
    'id_users'=>$id_users
]));

header('Location: ../views/users/index2.php?message='. json_decode($res)->message);