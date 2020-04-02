<html>
<body>
<center>

<label for="file">SELECT YOUR Image</label>
<input type="file" id="file" accept=".jpg,..weBP,.png,.ico,.BMP,.GIF,.TIF,.TGA">

<span><img src=""></span>
<div id="demo" ></div>

</center>

<style>
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

div{
font-size:150%;
font-family:Algerian,Borg9,'Budmo Jiggler',Harrington;
    text-transform: capitalize;
}
body{
color:white;
background:radial-gradient(circle,#560303,black);
}
</style>
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

</body>
</html>