<?php
require_once('../controllers/User.php');
$db = new User();
$id_staff = $_POST['id_staff'];
$last_name = $_POST['last_name'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];

$res = $db->update(json_encode([
    'id_staff'=>$id_staff,
    'last_name'=>$last_name,
    'name'=>$name,
    'father_name'=>$father_name,
]));

header('Location: ../../views/users/index.php?message='.json_decode($res)->message);
