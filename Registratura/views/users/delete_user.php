<?php
require_once ('../layout/header.php');
require_once ('menu2.php');
require_once ('../../controllers/User.php');
?>
<title>Регистратура</title>
<div class="container mx-auto">
    <div style="display: grid; grid-template-columns: repeat(3,1fr)">
        <?php
        $user = new User();
        $data = $user->getU();
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
                    <div>
                        <span class="card-subtitle text-muted">Пароль: </span>
                        <span class="card-text"><?php echo $row['password'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Роль: </span>
                        <span class="card-text"><?php echo $row['role'];?></span>
                    </div>
                    <div class="my-2">
                        <form action="../../middleware/user.php" method="post">
                            <input name="id_users" value="<?php echo $row['id_users'];?>" type="text" hidden>
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
