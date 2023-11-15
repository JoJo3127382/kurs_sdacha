<div>
    <a class="knopka" href="../auth/menu2.php">В меню</a>
</div>
<?php
require ('../layout/header.php');
require_once('../../controllers/order.php');
?>
    <div class="container mt-5">
        <form action="../../middleware/orders/createOrders.php"
              method="post"
              class="d-flex flex-column justify-content-center align-items-center">
            <h3>Запись</h3>
            <div class="col-5">
                <label for="start">Время</label>
                <input id="start" name="start" type="datetime-local" class="form-control" placeholder="Начало работы" required>
            </div>
            <div class="col-5">
                <label for="name">Услуга</label>
                <select name="name" id="name"  class="form-control" required>
                    <option value=""></option>
                    <option value="Получение паспорта">Получение паспорта</option>
                    <option value="Замена паспорта">Замена паспорта</option>
                    <option value="Получение загранпаспорта">Получение загранпаспорта</option>
                    <option value="Замена загранпаспорта">Замена загранпаспорта</option>
                    <option value="Консультация">Консультация</option>
                </select>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Отправить</button>
            </div>
        </form>
    </div>