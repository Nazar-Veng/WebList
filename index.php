<?php
include "core/db.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <title>Створити</title>
</head>
<form method="post" enctype="multipart/form-data" action="">
    <body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-c-plus-plus'></i>
                <div class="logo_name">CodingLab</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="index.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Створити</span>
                </a>
                <span class="tooltip active">Створити</span>
            </li>
            <li>
                <a href="result_blog.php">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Збережені</span>
                </a>
                <span class="tooltip">Збережені</span>
            </li>
            <li>
                <a href="info.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Про нас</span>
                </a>
                <span class="tooltip">Про нас</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <i class='bx bx-log-out' id="log_out"></i>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text_h1"><h1>Створити листівку</h1></div>

        <div class="panel_editor">
            <label>Колір заголовку: </label>
                <select name="sel_color_head">
                    <option value="#000000">Оберіть колір:</option>
                    <option value="#ff0000" style="background: #ff0000">Red</option>
                    <option value="#0000ff" style="background: #0000ff">Blue</option>
                    <option value="#ffff00" style="background: #ffff00">Yellow</option>
                    <option value="#000000" style="background: #000000">Black</option>
                    <option value="#A52A2A" style="background: #A52A2A">Brown</option>
                    <option value="#FFa500" style="background: #FFa500">Orange</option>
                    <option value="#00ff00" style="background: #00ff00">Green</option>
                    <option value="#800080" style="background: #800080">Purple</option>
                    <option value="#808080" style="background: #808080">Grey</option>
                    <option value="#FFFFFF" style="background: #FFFFFF">White</option>
                </select>
            <label>Колір тексту: </label>
            <select name="sel_color_text">
                <option value="#000000">Оберіть колір:</option>
                <option value="#ff0000" style="background: #ff0000">Red</option>
                <option value="#0000ff" style="background: #0000ff">Blue</option>
                <option value="#ffff00" style="background: #ffff00">Yellow</option>
                <option value="#000000" style="background: #000000">Black</option>
                <option value="#A52A2A" style="background: #A52A2A">Brown</option>
                <option value="#FFa500" style="background: #FFa500">Orange</option>
                <option value="#00ff00" style="background: #00ff00">Green</option>
                <option value="#800080" style="background: #800080">Purple</option>
                <option value="#808080" style="background: #808080">Grey</option>
                <option value="#FFFFFF" style="background: #FFFFFF">White</option>
            </select>
            <input type="file" name="photo" onchange="preview()" value="Обрати фото">
        </div>

        <div class="create-list">
            <input type="text" class="c_head" name="head_text">
            <br>
            <hr>
            <input type="text" class="textarea_inp" name="textarea_inp" id="textarea_inp">
            <br>
            <img src="./assets/img/weblist.jpg" id="frame" width="400px" height="200px" alt="photo">
        </div>
        <div class="buttonHolder">
            <input value="Зберегти" title="Зберегти" type="submit" id="btn_s" name="save-btn">
        </div>
    </div>
    </body>
</form>
</html>
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
<?php
$valid = true;
$errors = array();
$today = date("Y-m-d");


if (isset($_POST['save-btn'])) {
    if (!empty($_POST['head_text'])) {
        $text_1 = $_POST['head_text'];
        if (!empty($_POST['textarea_inp'])) {
            $text_2 = $_POST['textarea_inp'];
            $imageData = $_FILES["photo"]["tmp_name"];
            $imgContent = addslashes(file_get_contents($imageData));
            $color_head = $_POST['sel_color_head']; 
            $color_text = $_POST['sel_color_text'];
            $sql = ("INSERT INTO `save_result`(id, text_1,text_2, color_head, color_text, photo,dates) VALUE (NULL, '$text_1', '$text_2', '$color_head', '$color_text', '$imgContent', '$today')");
            if ($conn->query($sql) === TRUE) {
                echo "Дані успішно відправлені!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script type='text/javascript'>alert('Текстове поле пусте!');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Поле Заголовок пусте!');</script>";
    }
}



?>

