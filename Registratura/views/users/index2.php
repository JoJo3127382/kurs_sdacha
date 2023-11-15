<?php
require ('../layout/header.php');
require ('menu2.php');
require ('../../controllers/User.php');
?>
<div class="container mx-auto">
    <table class="table table-hover table-info">
        <tr>
            <th>id</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Пароль</th>
            <th>Статус</th>
        </tr>
        <?php
        $user = new User();
        $data = $user->getU();
        foreach ($data as $key=>$row){
            ?>
            <tr>
                <td><?php echo $row ['id_users']?></td>
                <td><?php echo $row ['last_name']?></td>
                <td><?php echo $row ['name']?></td>
                <td><?php echo $row ['father_name']?></td>
                <td><?php echo $row ['password']?></td>
                <td><?php echo $row ['role']?></td>
            </tr>
        <?php }?>
    </table>