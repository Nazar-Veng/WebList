<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="assets/css/info.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <title>Про нас</title>
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
<form method="post" action="info.php">
    <div class="home_content">
        <div class="text_h1"><h1>Про нас</h1></div>
        <div class="info_txt"><p>WebList – це універсальний веб-сайт, на якому будь-хто може зробити примітивну вітальну або рекламну листівку. Це перша версія даного сайту, тому на ньому можуть бути недоступні деякі функції. В подальшому, можливості будуть розширені та доступні кожному користувачеві. З повагою, адміністрація WebList.</p></div>
        <br>
        <img src="./assets/img/weblist.jpg" id="frame" width="400px" height="200px" alt="photo">
    </div>
</form>
</body>
</html>