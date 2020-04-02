<title>КАБИНЕТ</title>
<?php
    
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
    }?>
<style>
    body {
                    font-family: 'Oswald', sans-serif;
  background-image: url(https://wallup.net/wp-content/uploads/2015/12/109498-mountain-blue-landscape-nature.jpg);
                }
        .profile {
            color:transparent;
background-image:url(https://cdn1.ntv.com.tr/gorsel/pzeDhZxJfESBLEc8ihdXxw.jpg?width=1000&mode=both&scale=both&v=1285239178000);
background-size:160px 120px;
background-position: center;
cursor:pointer;
margin-top:-80px;
border:10px solid white;
border-radius:50%;
width:120px;
height:120px;
margin-left:210px;
margin-right:30px;
box-shadow:0 0 10px 0  black;
transition: background-image 0.5s ease-in;
}
.profile:hover,
.profile:active {
    color:white;
    background-size:500px 500px;
    background-image:url(https://images.wallpaperscraft.com/image/black_color_background_148445_2560x1080.jpg);
    background-color: black;
}
p {
    margin-top:20px;
    margin-left:28px;
    text-align:center;
font-size: 18px;
width:60px;
font-weight:bold;
-moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;


}
p::selection {
   background: transparent;
}
p::-moz-selection {
   background: transparent;
}
.text {
    color:white;
    margin-left:370px;
    margin-top:300px;
    font-size:25px;
    max-width:400px;
    width:400px;
}
.head {
    border-radius:5px;
    margin-top:440px;
    margin-left:180px;
    width:900px;
    height:120px;
    background-color:darkslategrey;
}

.button {
    background-color:transparent;
    cursor:pointer;
height:25px;
width:120px;
margin-left:600px;
border:1px solid rgb(175, 73, 73);
margin-top:-33px;
color:rgb(175, 73, 73);
border-radius:2px;
text-align:left;
padding:0 0 0px 10px;
font-weight:bold;
}
.button:focus {
    outline: 0;
outline-offset: 0;
color: rgb(160, 167, 167);
    border:1px solid rgb(160, 167, 167);
    width:130px;
}


.button2 {
    background-color:transparent;
    cursor:pointer;
height:25px;
width:165px;
margin-left:750px;
border:1px solid rgb(175, 73, 73);
margin-top:-33px;
color:rgb(175, 73, 73);
border-radius:2px;
transition: 0.4s ease-out;
text-align:left;
padding:0 0 0px 10px;
font-weight:bold;
-moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}
.button2:focus {
    outline: 0;
outline-offset: 0;
}
.button2:hover,
.button2:active {
    box-shadow:0 0 2px 0 black;
}

.p {
    margin-left:380px;
    cursor:pointer;
    margin-top:-20px;
    text-align:center;
    font-weight:bold;
    color:white;
    -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
font-size:60px;
transition: font-size 0.6s ease-in;
}
.p:hover,
.p:active {
    font-size:80px;
}
nav{
  margin:-350px 30%;-moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}

a{

    -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
    font-family:'Oswald' san-serif;
  text-decoration:none;
  color:#fff;
  width:120px;
  display:inline-block;
  text-align:center;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
}

div{
  width:120px; 
  height:2px;

  margin-bottom:20px;
}

a:nth-child(1) ~ div{
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
  -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}

a:nth-child(2):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(120px);
  background-color:#e74c3c;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;-moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}





a:nth-child(3):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(240px);
  background-color:#BF55EC;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;-moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}


a:nth-child(4):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(360px);
  background-color:#f39c12;
  color:#03C9A9;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
  -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}



a:nth-child(2):hover {
  color:#e74c3c;
  -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}

a:nth-child(3):hover {
  color:#BF55EC;-moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}

a:nth-child(4):hover {
  color:#f39c12;-moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}
.button {
  display: inline-block;
  width: 220px;
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
.button:hover,
.button:active {
  border-color: yellow;
  text-decoration-color:yellow; 
  color: yellow;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
              
}
.h1 {
    color:white;
    font-size:30px;
    font-weight:bold;
    margin-top:-300px;
    margin-left:550px;
    width:300px;
}
.button2 {
  font-family:'Impact';
  cursor:pointer;
  height: 60px;
  display: inline-block;
  width: 60px;
  padding: -10px;
  color: #fff;
  font-size:20px;
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
  border-color: blueviolet;
  text-decoration-color:yellow; 
  color: blueviolet;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
}
#password {
	position: relative;
}
#password-control {
	position: absolute;
	top: 11px;
	right: 6px;
	display: inline-block;
	width: 20px;
	height: 20px;
	background: url(/view.svg) 0 0 no-repeat;
}
#password-control.view {
	background: url(/no-view.svg) 0 0 no-repeat;
}
input {
  
  color: #fff;
  border: none;
  padding: 0;
  border-radius: 0;
  outline: none;
  width: auto;
  min-width: 100%;
  font-size: 1.5rem;
  line-height: 3em;
  font-family: Roboto, Arial, sans-serif;
  border-bottom: 2px solid ;
  background-color: transparent;
}

label {
 
    margin-left:500px;
    position: absolute;
    top: -60px;
    left:-500px;
    font-size: 25px;
    color: #fff;
    transition: 0.2s ease all;
    pointer-events: none;
}

input:focus ~ .label-box label,
input:valid ~ .label-box label {
    font-size: 18px;
    transform: translateY(-20px);
}

.label-box {
    position: relative;
    width: 600px;
}

.label-box::before,
.label-box::after {
    content: "";
    position: absolute;
    height: 2px;
    width: 0;
    bottom: 1px;
    transition-property: width;
    transition-duration: 0.2s;
}
.input-wrapper {
  width: 400px;
  margin-left: 480px;
  position:inherit;
}
.input-wrapper::after {
  content: attr(data-text);
  font-size: 2rem;
  line-height: 0;
  height: 0;
  max-width: 100%;
  font-family: Roboto, Arial, sans-serif;
  
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  overflow: hidden;
  user-select: none;
  
}
.left {
  
  margin-left:-400px;
  font-family:'Impact';
}
.center {
  margin-left:-750px;
  margin-top:150px;
  font-family:'Impact';
}
.right {
  margin-left:630px;
  margin-top:305px;
  width:300px;
  font-size:18px;
}
label {
    background:#333;
    padding:10px;
    border-radius:10px;
    
}
input[type=file]{
opacity:0;
}
img{

width:100%;
position:relative;

}
span{
color:white;
border-radius:100%;
width:250px;
height:250px;
display:block;
background-color: white;
text-align:center;
overflow:hidden;
}

    </style>
    <div class="text">
<?php
    if (isset($_SESSION['user'])) { 
        echo("<h3>" . $_SESSION['user']['name'] . "</h3>");
?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<div id="center">
   
</div>
<nav>

  <a href="http://cfg.local/chatmyfirstsite.php" class="hvr-grow"><h1>ГЛАВНАЯ</h1></a>
  <a href="http://cfg.local/aboutmyfirstsite.php" ><h1>О СЕБЕ</h1></a>
  <a href="http://cfg.local/gallereamyfirstsite.php" ><h1>ГАЛЕРЕЯ</h1></a>
  <a href="http://cfg.local/contactmyfirstsite.php" ><h1>КОНТАКТЫ</h1></a>
  <div></div>
  

</nav>


<div class="head"><div class="p">📷</div></div>
<div class="profile"><p>📷</br> Добавить фото</p></div>

<div class="h1">ВАШ КАБИНЕТ</div>


<script>
var x=document.querySelector('#file');
x.addEventListener("change",a)
function a(){
document.querySelector("img").src=window.URL.createObjectURL(x.files[0])
;
var q=["omg cool dp!","wow!","great!","beautiful","cute","awsome","nice pic","cool dude!","wata pic dude","wow unbeatable","good photographic sense ","powerful !","looking great"];
document.querySelector("#demo").innerHTML=q[Math.floor(Math.random()*q.length)]
}
</script>

<script>
  document.querySelector('.button').onclick = function(){
	         this.value = this.value == "+ Подписаться"? "✔ Вы подписаны" : "+ Подписаться";
	        };

</script>
<script type="text/javascript" language="javascript">
   
</script>


<script type="text/javascript" language="javascript">
function changeBg(){
   document.getElementById("ee").style.backgroundColor = 'red';
}
</script>
<?php
    }
    else {
?>
<div class="left">
<form action=" " method="POST">
<div id="password" align="left" class="input-wrapper" data-text="">
<font color="white"><h2>АВТОРИЗИРУЙТЕСЬ</h2></font>
  <div><input  type="text" required name="login">   <div class="label-box"> <label>ЛОГИН</label></div>
  <div><input id="password-input" type="password" required name="password">   <div class="label-box"> <label>ПАРОЛЬ</label></div>
  <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
  </div>
  <div class="center">
  <input class="button2" type="submit" value="ВОЙТИ"></div>
  </div>
  


</div>
<div class="right">
<a href="chatmyfirstsite.php">Нет аккаунта?</a></div>
<?php
}
?>
