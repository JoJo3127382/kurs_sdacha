<?php
require ('../layout/header.php');
require ('menu.php');
require ('../../controllers/User.php');
?>
<div class="container mx-auto">
<table class="table table-hover table-info">
        <tr>
            <th>id</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Должность</th>
        </tr>
        <?php
        $user = new User();
        $data = $user->get();
        foreach ($data as $key=>$row){
        ?>
        <tr>
            <td><?php echo $row ['id_staff']?></td>
            <td><?php echo $row ['last_name']?></td>
            <td><?php echo $row ['name']?></td>
            <td><?php echo $row ['father_name']?></td>
            <td><?php echo $row ['post']?></td>
        </tr>
            <?php }?>
</table>