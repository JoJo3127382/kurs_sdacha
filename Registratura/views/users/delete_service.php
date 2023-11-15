<?php
require_once ('../layout/header.php');
require_once('menu.php');
require_once ('../../controllers/Services.php');
?>
<title>Регистратура</title>
<div class="container mx-auto">
    <div style="display: grid; grid-template-columns: repeat(3,1fr)">
        <?php
        $user = new Services();
        $data = $user->getData();
        foreach ($data as $key =>$row){
            ?>
            <div class="card m-2 shadow">
                <div class="card-body">
                    <div>
                        <span class="card-subtitle text-muted">id: </span>
                        <span class="card-text"><?php echo $row['id_services'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Запись: </span>
                        <span class="card-text"><?php echo $row['service'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Сроки: </span>
                        <span class="card-text"><?php echo $row['deadlines'];?></span>
                    </div>
                    <div class="my-2">
                        <form action="../../middleware/deleteService.php" method="post">
                            <input name="id_services" value="<?php echo $row['id_services'];?>" type="text" hidden>
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
