<?php
require ('../layout/header.php');
require_once ('../../controllers/Services.php');
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
    <a class="knopka" href="menu2.php">Мои записи</a>
    <div>
        <form action="../../middleware/auth/logout.php" method="post">
            <button class="btn btn-primary" type="submit"  onclick="document.location.replace('../../middleware/auth/logout.php');">Выход</button>
        </form>
    </div>
</div>
<div class="container mx-auto">
    <div style="display: grid; grid-template-columns: repeat(3,1fr)">
        <?php
        $user = new Services();
        $data = $user->getData();
        foreach ($data as $key =>$row){
            ?>
            <div class="card m-2 shadow" style="background-color: #E9ECE9">
                <div class="card-body">
                    <div>
                        <span class="card-subtitle text-muted">Сотрудник: </span>
                        <span class="card-text"><?php echo $row['service'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Даты: </span>
                        <span class="card-text"><?php echo $row['deadlines'];?></span>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<?php
require ('../../views/layout/footer.php');
?>
