
<?php
    include('config.php');
    $registrationSuccess = true;
    $registrationUserErrors = [];
    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
    
    if ($mysqli->connect_errno) {
        $registrationSuccess = false;
        die("Ошибка подключения к базе данных: " . $mysqli->connect_errno . " " . $mysqli->connect_error);
    } else {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $verificationPassword = $_POST['verificationPassword'];
        
        if ($password !== $verificationPassword) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Введёные пароли не совпадают!';
        }
        if (2 > strlen($name) || strlen($name) > 32) {
            $registrationSuccess = false;
            $registrationUserErrors[] = '';
        }
        if (6 > strlen($login) || strlen($login) > 32) {
            $registrationSuccess = false;
            $registrationUserErrors[] = '';
        }
        if (6 > strlen($password) || strlen($password) > 20) {
            $registrationSuccess = false;
            $registrationUserErrors[] = '';
        }
        $loginQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        if (!$loginSelect = $mysqli->query($loginQuery)) {
            $registrationSuccess = false;
            die('Ошибка запроса: '. $mysqli->error);
        } else {
            if ($loginSelect->num_rows) {
                $registrationSuccess = false;
                $registrationUserErrors[] = 'Введёный логин уже существует!';
            }
        }
        
        $hashPassword = hash('md5', $password);
        
        if ($registrationSuccess) {
            $query = "INSERT INTO `users` (`name`, `login`, `password`) VALUES ('$name', '$login', '$hashPassword')";
            if (!$mysqli->query($query)) {
                die('Ошибка запроса: '. $mysqli->error);
            }
        } else {
            foreach ($registrationUserErrors as $error) {
                ?>
                    <div style="color: red;margin-top:250px;margin-bottom:-220px;margin-left:-10px;width:310px;">
                        <?php
                            echo($error . '<br>');
                        ?>
                    </div>
                <?php
            }
            ?>

        <?php
        }

        if ($registrationSuccess) {
            ?>
                Вы успешно зарегестрировались!!!<br>
                <a href="index.php">Перейти на главную.</a>
            <?php
        }
    }
    $mysqli->close();
?>
