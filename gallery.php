<style>
.main {
   width:900px;
   margin:0 auto;
   height:100%
}
.main img {
   position:relative;
   float:left;
   width:280px;
   height:180px;
   margin:10px;
}
    </style>

<div class="main">
<?
$result = mysql_query ("SELECT * FROM images",$db);
if(!$result) { echo "Произошла ошибка подключения к серверу и БД, проверьте параметры подключения"; }
// Если количество записей больше нуля
if (mysql_num_rows($result) > 0)
{
   // Записываем полученные данные в массив
   $myrow = mysql_fetch_array ($result);
   // В цикле размещаем изображения на странице
   do {
                // В атрибуту src присваиваем путь до файла картинки
      echo "<img src='".$myrow['catalog'].$myrow['filename']."' />";
   }
   while ($myrow = mysql_fetch_array($result));
}
else
{
   // Сообщение о пустой таблице
   echo "<p>Информация по запросу не может быть извлечена, в таблице нет записей.</p>";
   exit();
}
?>
</div>