<?php
include "core/db.php";

$result = mysqli_query($conn, "SELECT * FROM `save_result`");
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
        <link rel="stylesheet" type="text/css" href="assets/css/res_blog.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Збережені</title>
    </head>
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
    <form method="post" action="result_blog.php">
        <div class="home_content">
            <div class="text_h1"><h1>Збережені листівки</h1></div>
            <div class="out_result">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo '<div class="card">';
                    echo '<input type="submit" name="delite-' . $row['id'] . '" value="X">';
                    echo '<p style="color: '.$row['color_head'].'">' . $row['text_1'] . '</p><br>';
                    echo '<p style="color: '.$row['color_text'].'">' . $row['text_2'] . '</p><br>';
                    echo '<img src="data:image;base64,' . base64_encode($row['photo']) . '"alt="Image" style="width: 215px; height: 150px;" >';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </form>
    </body>
    </html>
<?php
for ($i = 1; $i <= 100; $i++) {
    if (isset($_POST['delite-'.$i])) {
        $delete_date = ("DELETE FROM `save_result` WHERE id=$i");
        if ($conn->query($delete_date) === TRUE) {
            echo "Дані успішно відправлені";
        } else {
            echo "Error: " . $delete_date . "<br>" . $conn->error;
        }
    }
}
?>