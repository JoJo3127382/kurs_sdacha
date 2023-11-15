<?php
require('../layout/header.php');
require_once('menu3.php');
require('../../controllers/Services.php');
$db = new Services();
?>
<div class="container mt-5">
    <form action="../../middleware/createServices.php"
          method="post"
          class="d-flex flex-column justify-content-center align-items-center">
        <h3>Создание</h3>
        <div class="col-5">
            <label for="service">Услуга</label>
            <input id="service" name="service" type="text" class="form-control" placeholder="Введите название услуги" required>
        </div>
        <div class="col-5">
            <label for="deadlines">Даты</label>
            <input id="deadlines" name="deadlines" type="text" class="form-control" placeholder="Введите даты" required>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
    </form>
</div>
