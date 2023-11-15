<div>
    <a class="knopka" href="../auth/menu2.php">В меню</a>
</div>
<?php
require_once ('../layout/header.php');
require_once ('../../controllers/order.php');
?>
<title>Регистратура</title>
<div class="container mx-auto">
    <div style="display: grid; grid-template-columns: repeat(3,1fr)">
        <?php
        $user = new order();
        $data = $user->get();
        foreach ($data as $key =>$row){
            ?>
            <div class="card m-2 shadow">
                <div class="card-body">
                    <div>
                        <span class="card-subtitle text-muted">Запись: </span>
                        <span class="card-text"><?php echo $row['name'];?></span>
                    </div>
                    <div class="my-2">
                        <form action="../../middleware/orders/delete.php" method="post">
                            <input name="id_orders" value="<?php echo $row['id_orders'];?>" type="text" hidden>
                            <button class="btn btn-danger" type="submit">Отменить</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
