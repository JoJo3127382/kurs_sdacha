<?php
require_once ('../../controllers/order.php');
$db = new order();
$id_orders = $_POST['id_orders'];

$res = $db->deleteOrder(json_encode([
    'id_orders'=>$id_orders
]));

header('Location: ../../views/auth/index.php?message='. json_decode($res)->message);