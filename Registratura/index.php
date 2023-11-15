<?php
require_once('views/layout/header.php');
require_once('controllers/Services.php');
?>
    <div style="background-color: #06B10B">
        <div class="buttones">
            <a class="knopka" href="/views/auth/auth.php">Авторизация</a>
            
            <a class="knopka" href="/views/auth/registration.php">Регистрация</a>
        </div>
        <div class="logo">
            <a href="/index.php"><img src="images/pngwing.com.png" alt="images/pngwing.com.png" width="60"></a>
        </div>
    </div>
<?php
if (isset($_GET['message'])) {
    echo $_GET['message'];
}
?>
    <div class="container mx-auto">
        <div style="display: grid; grid-template-columns: repeat(3,1fr)">
            <?php
            $user = new Services();
            $data = $user->getData();
            foreach ($data as $key => $row) {
                ?>
                <div class="card m-2 shadow" style="background-color: #E9ECE9">
                    <div class="card-body">
                        <div>
                            <span class="card-subtitle text-muted">Услуга: </span>
                            <span class="card-text"><?php echo $row['service']; ?></span>
                        </div>
                        <div>
                            <span class="card-subtitle text-muted">Дни приема и время: </span>
                            <span class="card-text"><?php echo $row['deadlines']; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php
require_once('views/layout/footer.php');
?>