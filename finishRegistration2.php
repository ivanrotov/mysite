
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
            <style>
                body {
                    font-family: 'Oswald', sans-serif;
  background-image: url(https://wallup.net/wp-content/uploads/2015/12/109498-mountain-blue-landscape-nature.jpg);
                }
                .br {
                    font-family:'Impact';
                    margin-top:300px;
                    margin-left:250px;
                    color:white;
                    font-size:50px;

                }
                a{
                    font-size:30px;
  text-decoration:none;
  color:#fff;
  display:inline-block;
  text-align:center;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;

}
a:hover,
a:active {
    color:red;
}
                .button2 {
                    margin-left:450px;
                    cursor:pointer;
                    font-family:'Impact';
  display: inline-block;
  width: 300px;
  padding: 8px;
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  text-align: center;
  outline: none;
  text-decoration: none;
  transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;
}
.button2:hover,
.button2:active {
  border-color: red;
  text-decoration-color:yellow; 
  color: red;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
}

                </style>

                <div class="br">ВЫ УСПЕШНО ЗАРЕГИСТРИРОВАЛИСЬ!!!</div><br>
                <div class="button2"><a href="index3.php">ПЕРЕЙТИ НА ГЛАВНУЮ</a></div>
            <?php
        }
    }
    $mysqli->close();
?>
