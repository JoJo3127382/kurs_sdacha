<?php
require('../controllers/Services.php');
$db = new Services();
$id_services = $_POST['id_services'];
$service = $_POST['service'];
$deadlines = $_POST['deadlines'];


$response = $db->createServices(json_encode([
    'id_services'=>$id_services,
    'service'=>$service,
    'deadlines'=>$deadlines,

]));

header('Location: ../index2.php?message='.json_decode($response)->message);