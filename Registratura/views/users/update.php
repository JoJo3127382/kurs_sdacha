<?php
require_once('../layout/header.php');
require ('menu.php');
require_once('../../controllers/User.php');
$db = new User();
?>
    <table class="table table-hover table-info">
        <thead>
        <tr>
            <th></th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Должность</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $data = $db->get();
        foreach ($data as $key => $row) {
            ?>
            <tr>
                <form class="mx-2" action="../../middleware/update.php" method="post">
                    <td>
                        <?php echo ++$key; ?>
                        <input id="id_staff" name="id_staff" type="text" value="<?php echo $row["id_staff"]; ?>" class="form-control" hidden
                               required>
                    </td>
                    <td>
                        <input id="last_name" name="last_name" type="text" value="<?php echo $row["last_name"]; ?>" class="form-control"
                               required>
                    </td>
                    <td>
                        <input id="name" name="name" type="name" value="<?php echo $row["name"]; ?>" class="form-control"
                               required>
                    </td>
                    <td>
                        <input id="father_name" name="father_name" type="text" value="<?php echo $row["father_name"]; ?>" class="form-control"
                               required>
                    </td>
                    <td>
                        <input id="post" name="post" type="post" value="<?php echo $row["post"]; ?>" class="form-control"
                               required>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </td>
                </form>
            </tr>
        <?php } ?>
        </tbody>
    </table>
