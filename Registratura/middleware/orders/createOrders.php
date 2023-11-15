<?php
require_once('../../controllers/order.php');
$db = new order();
$start = $_POST['start'];
$name = $_POST['name'];


$response = $db->createOrder(json_encode([
    'start'=>$start,
    'name'=>$name,
]));

header('Location: ../../views/auth/index.php?message='.json_decode($response)->message);
