<html>
    <head>
        <title>ГЛАВНАЯ</title>
        <meta charset="utf-8">
        <style>

body{
  font-family: 'Oswald', sans-serif;
  background-image: url(https://wallup.net/wp-content/uploads/2015/12/109498-mountain-blue-landscape-nature.jpg);

}

nav{
  margin:0% 30%;
}

a{
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
  
}

a:nth-child(2):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(120px);
  background-color:#e74c3c;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
}





a:nth-child(3):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(240px);
  background-color:#BF55EC;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
}


a:nth-child(4):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(360px);
  background-color:#f39c12;
  color:#03C9A9;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
}



a:nth-child(2):hover {
  color:#e74c3c;
}

a:nth-child(3):hover {
  color:#BF55EC;
}

a:nth-child(4):hover {
  color:#f39c12;
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

.button10 {
  cursor:pointer;
  width: 110px;
  margin-left:-70px;
  margin-top:50px;
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
.button10:hover,
.button10:active {
  border-color: red;
  text-decoration-color:yellow; 
  color: red;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
              
}


img {
width: 200px;
height: 200px;
border:1px solid #ddd;    
border-radius: 50%;
box-shadow: 0 2px 5px #aaa;
margin: 10% auto;
margin-left: 20px;
margin-top:10px;
position: left;
top: 0; left: 0; bottom: 0; right: 0;
transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;    
 }
img:hover {
border-radius: 3px;
 }
 #center{

width: 0%;
margin: 0 auto;

}


#left{

width: 0%;
height: 0%;
float: left;
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

input {
  
  color: #fff;
  border: none;
  padding: 0;
  border-radius: 0;
  outline: none;
  width: auto;
  min-width: 100%px;
  font-size: 1.5rem;
  line-height: 3em;
  font-family: Roboto, Arial, sans-serif;
  border-bottom: 2px solid ;
  background-color: transparent;
}

/*fgmryyk*/




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



input {
    right:-100px;
      margin-top:-80px;
margin-bottom:-10px;
    width: 270px;
    padding: 0px;
margin-top:20px;
    font-size: 18px;
    font-family:'Oswald';
    border: none;

    border-bottom: 2px solid #fff;
    box-sizing: border-box;
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

.button2 {
  cursor:pointer;
  display: inline-block;
  width: 180px;
  padding: 0px;
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
  border-color: blueviolet;
  text-decoration-color:yellow; 
  color: blueviolet;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
}





/*------------------------------------*/





@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);




a.btn {
  font-family: 'Oswald';
  padding: 8px 0;
  position: absolute;
  font-size:25px;
  top: 50%; 
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: 'Oswald';
  font-weight: 1000;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  display: inline-block;
  width: 100px;
  padding: 8px;
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  text-align: center;
  outline: none;
  margin-top:400px;
  margin-left:530px;
}
.btn:hover,
.btn:active {
  border-color: red;
  text-decoration-color:red; 
  color: red;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
}

.modal-wrapper {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0; 
  left: 0;
  background: rgba(41, 171, 164, 0.8);
  visibility: hidden;
  opacity: 0;
  transition: all 0.25s ease-in-out;
}

.modal-wrapper.open {
  opacity: 1;
  visibility: visible;
}

.modal {
  width: 600px;
  height: 600px;
  display: block;
  margin: 50% 0 0 -300px;
  position: relative;
  top: 50%; 
  left: 50%;
  background:white;
  /*background: #fff;*/
  opacity: 0;
  transition: all 0.5s ease-in-out;
}

.modal-wrapper.open .modal {
  margin-top: -200px;
  opacity: 1;
}

/*.head { 
  width: 470px;
  height: 20px;
  margin-top:-5000px;
  padding: 15px 30px;
  overflow: hidden;
  background: #e2525c;
}

.btn-close {
  border:2px solid white;
  width:160px;
  height:25px;
    margin-top:-8300px;

  font-size: 20px;
  margin-left:325px;
  font-family:'Oswald';
  display: block;
  color: #fff;

  padding: 8.5px;
  text-align: center;
  outline: none;
  text-decoration: none;
  cursor:pointer;
  
}*/


.btn-close {
  border:2px solid white;
  width:160px;
  height:25px;
  font-size: 20px;
  margin-left:300px;
  margin-right:50px;
  margin-top:-50px;
  font-family:'Oswald';
  display: block;
  color: #fff;

  padding: 8.5px;
  text-align: center;
  outline: none;
  text-decoration: none;
  cursor:pointer;
  
}    

.content {
  padding: 5%;
}

.good-job {
  text-align: left;
  margin-top:100px;
  font-family: 'Oswald', Arial,       Helvetica, sans-serif;
  color: #e2525c;
}
.good-job .fa-thumbs-o-up {
  font-size: 60px;
}
.good-job h1 {
  font-size: 45px;
}
.txt {
font-family:'Oswald';
font-size:30px;
margin-top:20px;
margin-left:100px;

}
.text{
    font-family: 'Oswald', sans-serif;
    font-size:16px;
    font-weight:bold;
    text-indent:10px;
    margin-top:25px;

}
.area {
margin-left:400px;
margin-top:-200px;
}

.prokrutka {

height:500px;
width:500px;
margin-top:200px;
margin-left:380px;
background-image: url(https://wallup.net/wp-content/uploads/2015/12/109498-mountain-blue-landscape-nature.jpg);
border:4px solid white;
overflow-y: scroll;
}
.place {

    background-color: lightskyblue;
    margin-left:-380px;
    margin-bottom:5px;
    width:900px;
    height:25px;
    border-radius:20px;
    word-break: break-all;
}
.label-box2 {
    position: relative;
    width: 400px;
    margin-top:100px;
    margin-left:-370px;
}

.label-box2::before,
.label-box2::after {
 
    content: "";

    height: 2px;
    width: 0;

    transition-property: width;
    transition-duration: 0.2s;
}
.search {

  width:150px;
  height:30px;
  border-top:none;
  margin-top:-5px;
  margin-left:-370px;
}

#input2 {
 
  margin-bottom:-58px;
  padding:50px;
  margin-top:150px;
  margin-left:-380px;
  color: #fff;
  border: none;
  padding: 0;
  border-radius: 0;
  outline: none;
  width: auto;
  min-width: 100%;
  width:270px;
  font-size: 1.5rem;
  line-height: 3em;
  font-family: Roboto, Arial, sans-serif;
  border-bottom: 2px solid ;
  background-color: transparent;

}

#btn {
  cursor:pointer;
  font-size:15px;
  border:2px solid white;
  padding: 0 0 -100px 0;
  width:100px;
}

#in {
  border-top:none;
  color:white;
  margin-top:5px;
}
.button20 {
  margin-top:-120px;
  margin-left:1100px;
  cursor:pointer;
  display: inline-block;
  width: 140px;
  padding: 0px;
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
.button20:hover,
.button20:active {
  border-color: blueviolet;
  text-decoration-color:yellow; 
  color: blueviolet;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
}
            </style>
    </head>
    <body>
        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<div id="left" >

<img  src='https://realizecolorado.com/wp-content/uploads/2015/10/SITE-realize-colorado-industry-logos.png' /> 

</div>
<div id="center">
   
</div>
<nav>

  <a href="http://cfg.local/chatmyfirstsite.php" class="hvr-grow"><h1>ГЛАВНАЯ</h1></a>
  <a href="http://cfg.local/aboutmyfirstsite.php" ><h1>О СЕБЕ</h1></a>
  <a href="http://cfg.local/gallerymyfirstsite.php" ><h1>ГАЛЕРЕЯ</h1></a>
  <a href="http://cfg.local/contactmyfirstsite.php" ><h1>КОНТАКТЫ</h1></a>
  <div></div>
  <a class="button" href="http://cfg.local/myfirstsite.php?#">РЕГИСТРАЦИЯ ▼</a>

  <a class="button" href="http://cfg.local/entermyfirstsite.php">АВТОРИЗАЦИЯ</a>

</nav>

<!--dngwrgbejbjsb-->

<a class="button20" href="http://cfg.local/index3.php">ВАШ КАБИНЕТ</a>

<form action="finishRegistration2.php" method="POST">
<div align="left" class="input-wrapper" data-text="">
    <font color="white"><h1>ФОРМА РЕГИСТРАЦИИ</h1></font>
  
    <div><input   type="name" required name="name"> <div class="label-box"> <label>ИМЯ</label></div>
  <div><input  type="login" required name="login">  <div class="label-box"> <label>ЛОГИН</label></div>
  <div><input  type="password" required name="password">   <div class="label-box"> <label>ПАРОЛЬ</label></div>
  <div><input  type="password" required name="verificationPassword">   <div class="label-box"> <label>ПОВТОРИТЕ ПАРОЛЬ</label></div>
  <input class="button2" type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">

  </div>
</form>


</div>






<!-- Button -->
<div class="page-wrapper">
  <a class="btn trigger" href="#">FEEDBACK</a>
</div>


<div class="modal-wrapper">
<div class="prokrutka">  

<form method="POST" action="">
 <div class="area"><p><b><h3>Введите ваш отзыв:</h3></b></p>

<pre><div class="search" id="input2"><input  placeholder="Введите ваш текст здесь"type="text" name="message" ></div> <p><input id="btn" type="submit" value="ОТПРАВИТЬ"></p><a class="btn-close trigger" href="#">ЗАКРЫТЬ ОКНО</a></pre>

</form>


<?php

$mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'programs');
if($mysqli->connect_errno) {
echo "Error: " . $mysqli->connect_error . "\n";
exit;
}
if(isset($_POST['message'])) {
$message = $_POST['message'];

$_POST['message'] = null;

$query = "INSERT INTO `messages` (`message`) VALUES ('$message')";

$mysqli->query($query);
if($mysqli->errno) {
echo "Error: " . $mysqli->error . "\n";

exit;
}
}

$result = $mysqli->query("SELECT * FROM `messages`");
if ($mysql->errno) {
echo "Error: " . $mysql->error . "\n";
exit;
}


while ($row = $result->fetch_assoc()) {
?>
<div>
    <div class="text">
<p>
<div class="place"       >
<?php echo $row['id'] . "-->" . $row['message']; ?>
</p>

</div>
</div>
</div>
<?php
}
$mysqli->close();
?>
  
  

  <!--<div class="head">          
  <a  class="btn-close trigger" href="#">ЗАКРЫТЬ ОКНО--> 
        <i class="fa fa-times" aria-hidden="true">
        



       

        </i>
</a>
     
    </div>
    <div class="content">
        <div class="good-job">
          <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
 

        </div>
    </div>

  </div>
</div>
<div align="center" class="section" id="contacts">

<?php
include('finishRegistration.php');
include('config.php');
?>



          <!--      <div>
                    <input type="text" required>
                    <div class="label-box">
                        <label>ИМЯ</label>
                        
                    </div>
                 

                    
                </div>-->
               
       
               

<!-- content -->







  
<script>

$( document ).ready(function() {
  $('.trigger').on('click', function() {
     $('.modal-wrapper').toggleClass('open');
    $('.page-wrapper').toggleClass('blur-it');
     return false;
  });
});
  </script>
    </body>
</html>