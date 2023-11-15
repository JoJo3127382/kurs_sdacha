<?php
require ('../layout/header.php');
require ('menu.php');
require ('../../controllers/Role.php');
?>
<div class="container mt-5">
    <form action="../../middleware/createUser.php"
          method="post"
          class="d-flex flex-column justify-content-center align-items-center">
        <h3>Создание</h3>
        <div class="col-3">
            <label for="last_name">Фамилия</label>
            <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Фамилия сотрудника" required>
        </div>
        <div class="col-3">
            <label for="name">Имя</label>
            <input id="name" name="name" type="text" class="form-control" placeholder="Имя сотрудника" required>
        </div>
        <div class="col-3">
            <label for="father_name">Отчество</label>
            <input id="father_name" name="father_name" type="text" class="form-control" placeholder="Отчество" required>
        </div>
        <div class="col-3">
            <label for="post">Должность</label>
            <input id="post" name="post" type="text" class="form-control" placeholder="Должность" required>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Отправить</button>
        </div>
    </form>
</div>
