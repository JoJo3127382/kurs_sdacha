<?php
require_once ('../layout/header.php');
require_once ('menu2.php');
require_once ('../../controllers/User.php');
$db=new User();
?>
    <table class="table table-hover table-info">
        <thead>
        <tr>
            <th>id</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Пароль</th>
            <th>Статус</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $data = $db->getU();
        foreach ($data as $key => $row) {
            ?>
            <tr>
                <form class="mx-2" action="../../middleware/updateU.php" method="post">
                    <td>
                        <?php echo ++$key; ?>
                        <input id="id_users" name="id_users" type="text" value="<?php echo $row["id_users"]; ?>" class="form-control" hidden
                               required>
                    </td>
                    <td>
                        <input id="last_name" name="last_name" type="text" value="<?php echo $row["last_name"]; ?>" class="form-control"
                               required>
                    </td>
                    <td>
                        <input id="name" name="name" type="text" value="<?php echo $row["name"]; ?>" class="form-control"
                               required>
                    </td>
                    <td>
                        <input id="father_name" name="father_name" type="text" value="<?php echo $row["father_name"]; ?>"class="form-control"
                               required>
                    </td>
                    <td>
                        <input id="password" name="password" type="text" value="<?php echo $row["password"]; ?>" class="form-control"
                               required>
                    </td>
                    <td>
                        <input id="role" name="role" type="text" value="<?php echo $row["role"]; ?>"
                               class="form-control" required>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </td>
                </form>
            </tr>
        <?php } ?>
        </tbody>
    </table>