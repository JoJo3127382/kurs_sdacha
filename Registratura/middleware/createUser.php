<?php
require('../controllers/User.php');
$db = new User();
$last_name = $_POST['last_name'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];

$response = $db->createUser(json_encode([
    'last_name'=>$last_name,
    'name'=>$name,
    'father_name'=>$father_name,
]));

header('Location: ../views/users/index.php?message='.json_decode($response)->message);