<html>
    <head>
<style>
    #myObj {
        margin-left:70px;
        margin-top:250px;
    border: 1px;width: 450px;height: 350px;
    cursor:pointer;
    transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;   
    }
    #myObj:hover,
    #myObj:active {
        box-shadow:0 0 15px 0 black;
    }

    #count {
        margin-left:690px;
        margin-top:-237px;
    border: 1px;width: 500px;height: 350px;
    cursor:pointer;
    transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;   
    }
    #count:hover,
    #count:active {
        box-shadow:0 0 15px 0 black;
    }
.count {
width:70px;
height:45px;
background-color:white;
border:1px solid black;
text-align:center;
font-size:40px;
margin-top:5px;
margin-left:378px;
}
p {
    font-size:40px;
    margin-left:565px;
    margin-top:-200px;
}
.count2 {
width:70px;
height:45px;
background-color:white;
border:1px solid black;
text-align:center;
font-size:40px;
margin-top:5px;
margin-left:690px;
}
    </style>
    </head>
    <body>
    <div id="myObj"><img src="https://ovideo.ru/images/gallery/0029/8838/0005.jpg" width=450 height=350><div id="counter" class="count">0</div></div><p> Или</p><div id="count"><img src="http://i1.ytimg.com/vi/2m6yE9W9BXs/maxresdefault.jpg" width=500 height=350></div><div id="counts" class="count2">0</div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#myObj').click(function() {
        $('#counter').html(+$('#counter').html()+1);
    });
});
</script>

<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#count').click(function() {
        $('#counts').html(+$('#counts').html()+1);

    });
});

</script>
<?php 
include('config.php');
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) {
    include('config.php');
    $login = $_POST['login'];
    $password = $_POST['password'];
    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
    $authQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
    if (!$result = $mysqli->query($authQuery)) {
        die('Ошибка запроса: '. $mysqli->error);
    }
    if (!$result->num_rows) {
        echo('<font color="red">Неверный логин или пароль!</font>');
    } else {
        $user = $result->fetch_assoc();
        if ($user['password'] !== hash('md5', $password)) {
            echo('<font color="red">Неверный логин или пароль!</font>');
        } else {
            $_SESSION['user'] = $user;
        }
    }
}
if (isset($_SESSION['user'])) {
    echo("<h1>Добро пожаловать, " . $_SESSION['user']['name'] . "</h1>");
} else {
?>
<h1>Sign in</h1>
<form action="" method="POST">
    <input type="text" name="login" placeholder="Логин">
    <br>
    <input type="password" name="password" placeholder="Пароль">
    <br>
    <input type="submit">
</form>
<a href="registration.php">Зарегестрироваться.</a>
<?php
}
?>

<a href="aboutMe.php"> Обо мне</a>
    </body>
</html>