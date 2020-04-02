<?php
    $mysqli = new mysqli('127.0.0.1:3306','root','','the_bd');
    if ($mysqli->connect_errno) {
        echo $mysqli->connect_error;
        exit;
    }
    $result = $mysqli->query("SELECT * FROM `gallery`");
    if ($mysqli->errno) {
        echo $mysqli->error;
        exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            #gallery {
    background-color: white;
    justify-content: space-around;
    align-items: center;
    width: 80%;
}
.wrapper {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: teal;
}

.gallery-line {
    width: 100%;
    display: flex;
    justify-content: space-around;
    margin-top: 10px;
    margin-bottom: 10px;
}

.image-box {
    width: 200px;
    height: 200px;
}

.min-image {
    width: 100%;
    height: 100%;
}

#big-image-box {
    display: flex;
    justify-content: center;
    width: 100%;
}

#big-image {
    max-width: 70%;
    max-height: 500px;
}

#buttons {
    display: none;
    justify-content: center;
}
            </style>
    </head>
    <body>
        <div class="wrapper">
            <div id="gallery">
                <div id="big-image-box"></div>
                <div id="buttons">
                    <button onclick="prev()" id="prev_pic"><----сюды</button> <button onclick="next()" id="next_pic">туды----></button>
                </div>
                <?php
                    $counter = 1;
                    $pictureCount = 0;
                    while($row = $result->fetch_assoc()){
                        if ($counter >= 5) {
                            ?>
                                <div class="gallery-line">
                            <?php
                        }
                            echo '<div class="image-box">'
                                . '<img class="min-image" id="'.$pictureCount.'" src="'.$row['path'].'">'
                                . '</div>';
                        if ($counter >= 5) {
                            ?>
                                </div>
                            <?php
                                $counter = 1;
                                continue;
                        }
                        $counter++;
                    }
                ?>
            </div>
        </div>
        <form method="POST" action="savePhoto.php" enctype="multipart/form-data">
            <input type="file" name="photo">
            <input type="submit">
        </form>         
        <script>
document.getElementById('gallery').onclick = function (event) {
    if (event.target.classList.contains("min-image")) {
        showBig(event.target.getAttribute("src"), event.target.getAttribute("id"));
    }
}

function showBig(src,  pictureId) {
    let image = document.createElement("img");
    image.setAttribute("src", src);
    let showBlock = document.getElementById('big-image-box');
    image.setAttribute("id","big-image");
    image.setAttribute("picture_id", pictureId);
    showBlock.innerHTML = "";
    showBlock.append(image);
    document.getElementById('buttons').style.display = 'flex';
}

function next() {
    let pictureId = Number(document.getElementById('big-image').getAttribute('picture_id'));
    if (pictureId == <?php echo $pictureCount; ?>) {
        pictureId = 1;
    } else {
        pictureId++;
    }
    let picture = document.getElementById(pictureId);
    let pictureSrc = picture.getAttribute('src');
    showBig(pictureSrc, pictureId);
}

function prev() {
    let pictureId = Number(document.getElementById('big-image').getAttribute('picture_id'));
    if (pictureId == 1) {
        pictureId = <?php echo $pictureCount; ?>;
    } else {
        pictureId--;
    }
    let picture = document.getElementById(pictureId);
    let pictureSrc = picture.getAttribute('src');
    showBig(pictureSrc, pictureId);
}

        </script>
    </body>
</html>