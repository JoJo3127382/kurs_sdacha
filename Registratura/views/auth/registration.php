<?php
require('../layout/header.php');
require('../../controllers/roles.php');
$db= new roles();
?>
<div class="logo">
    <a href="/index.php"><img src="../../images/pngwing.com.png" alt="images/pngwing.com.png" width="40"></a>
</div>
    <title>Регистратура</title>
    <div class="d-flex flex-column justify-content-center align-items-center">
    <h3>Регистрация</h3>
    </div>
<form action="../../middleware/auth/registration.php" method="post" class="d-flex flex-column justify-content-center align-items-center">
    <div class="col-2">
        <label for="last_name">Фамилия</label>
        <input id="last_name" name="last_name" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Фамилия" required>
    </div>
    <div class="col-2">
        <label for="name">Имя</label>
        <input id="name" name="name" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Имя" required>
    </div>
    <div class="col-2">
        <label for="father_name">Отчество</label>
        <input id="father_name" name="father_name" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Отчество" required>
    </div>
    <div class="password">
        <label for="password">пароль</label>
        <input id="password-input" name="password" type="password" class="form-control" placeholder="Введите пароль" required>
        <a href="#" class="password-control"></a>
    </div>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('body').on('click', '.password-control', function(){
            if ($('#password-input').attr('type') == 'password'){
                $(this).addClass('view');
                $('#password-input').attr('type', 'text');
            } else {
                $(this).removeClass('view');
                $('#password-input').attr('type', 'password');
            }
            return false;
        });
    </script>
    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>