<?php
require_once('views/layout/header.php');
require ('controllers/Services.php');
$db= new Services();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <title>Регистратура</title>
</head>
<body>
<?php
if(isset($_GET['message'])){
    echo $_GET['message'];
}
?>
<div class="container d-flex justify-content-between align-items-center p-2 mb-2 border_width">
<div>
    <a class="knopka" href="/views/users/create_services.php">Услуги</a>
</div>
        <div>
           <a class="knopka" href="/views/users/index2.php">Пользователи</a>
        </div>
    <div>
        <a class="knopka" href="/views/users/index.php">Сорудники</a>
    </div>
        <form action="middleware/auth/logout.php" method="post">
              <button class="btn btn-primary" type="submit"  onclick="document.location.replace('middleware/auth/logout.php');">Выход</button>
        </form>
</div>
<table class="table table-hover table-info">
    <thead>
    <tr>
        <th> </th>
        <th>Услуга</th>
        <th>Даты</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = $db->getData();
    foreach ($data as $key=>$row){
        ?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $row['service'];?></td>
            <td><?php echo $row['deadlines'];?></td>
        </tr>
    <?php }?>
    </tbody>
</table>
<div class="container d-flex justify-content-between align-items-center p-2 mb-2">
</div>
<script src="/public/js/bootstrap.bundle.min.js"></script>
</body>
</html>




