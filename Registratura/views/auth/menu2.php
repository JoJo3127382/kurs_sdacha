<div class="d-flex">
    <a class="knopka" href="../auth/index.php">Главная страница</a>
</div>
<?php
require ('../layout/header.php');
require ('../../controllers/order.php');
?>

<div class="container d-flex justify-content-between align-items-center p-2 mb-2 border_width">
    <div>Запись</div>
    <div>
        <a class="knopka" href="../orders/create.php">Добавить запись</a>
        <a class="knopka" href="../orders/delete.php">Отменить запись</a>
    </div>
</div>
<div class="container">
<table class="table table-hover table-dark">
    <thead>
    <tr>
        <th> </th>
        <th>Дата</th>
        <th>Запись</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $db= new order();
    $data = $db->get();
    foreach ($data as $key=>$row){
        ?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $row['start'];?></td>
            <td><?php echo $row['name'];?></td>
        </tr>
    <?php }?>
    </tbody>
</table>
</div>
<?php
require ('../layout/footer.php');
?>