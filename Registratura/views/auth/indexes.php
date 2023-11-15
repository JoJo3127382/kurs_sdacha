<?php
require_once ('../layout/header.php');
require_once ('../../controllers/Services.php');
$db=new Services();
?>
<form action="../../middleware/auth/logout.php" method="post">
    <button class="btn btn-primary" type="submit"  onclick="document.location.replace('../../middleware/auth/logout.php');">Выход</button>
</form>
<div class="container d-flex justify-content-center align-content-center mx-auto">
    <table class="table table-hover table-info">
    <thead>
    <tr>
        <th> </th>
        <th>Название</th>
        <th>Дата</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = $db->getData();
    foreach ($data as $key => $row) {
        ?>
        <tr>
           <td>
                    <?php echo ++$key; ?>
                    <input id="id_services" name="id_services" type="text" value="<?php echo $row["id_services"]; ?>" class="form-control" hidden
                           required>
                </td>
                <td>
                    <input id="service" name="service" type="text" value="<?php echo $row["service"]; ?>" class="form-control" hidden
                           required>
                </td>
                <td>
                    <input id="deadlines" name="deadlines" type="text" value="<?php echo $row["deadlines"]; ?>" class="form-control" hidden
                           required>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>