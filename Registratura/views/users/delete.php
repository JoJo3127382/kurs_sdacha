<?php
require_once ('../layout/header.php');
require_once ('menu.php');
require_once ('../../controllers/User.php');
?>
<title>Регистратура</title>
<div class="container mx-auto">
    <div style="display: grid; grid-template-columns: repeat(3,1fr)">
        <?php
        $user = new User();
        $data = $user->get();
        foreach ($data as $key =>$row){
            ?>
            <div class="card m-2 shadow">
                <div class="card-body">
                    <div>
                        <span class="card-subtitle text-muted">Фамилия: </span>
                        <span class="card-text"><?php echo $row['last_name'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Имя: </span>
                        <span class="card-text"><?php echo $row['name'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Отчество: </span>
                        <span class="card-text"><?php echo $row['father_name'];?></span>
                    </div>
                    <div class="my-2">
                        <form action="../../middleware/delete.php" method="post">
                            <input name="id_staff" value="<?php echo $row['id_staff'];?>" type="text" hidden>
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>