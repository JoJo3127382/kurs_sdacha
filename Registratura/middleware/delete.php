<?php
require_once ('../controllers/User.php');
$db = new User();
$id_staff = $_POST['id_staff'];

$res = $db->delete(json_encode([
    'id_staff'=>$id_staff
]));

header('Location: ../views/users/index.php?message='. json_decode($res)->message);