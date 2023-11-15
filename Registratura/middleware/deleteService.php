<?php
require_once ('../controllers/Services.php');
$db = new Services();
$id_services = $_POST['id_services'];

$response = $db->deleteService(json_encode([
    'id_services'=>$id_services
]));

header('Location: ../index2.php?message='. json_decode($response)->message);
