<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
    <link rel="stylesheet" href="video.css" type="text/css" />
    <script src="Scripts/script.js"></script>
</head>

<body>
    <header>
        <a href="index.html"><img src="Resources\Logo.svg" /></a>
        <nav>
            <a href="index.html#AboutMe">Про меня</a>
            <a href="index.html#Reasons">Смысл жизни</a>
            <a href="index.html#WhereAmI">Контакты</a>
            <a href="photo.php">Фотоальбом</a>
            <a href="video.php">Видео</a>
        </nav>
    </header>
    <div class="In">

        <?php
        $dir = "VideoOut/";
        $files = scandir($dir);
        $i = 0;
        foreach ($files as $file) {
            if ($file != "." && $file != ".." && $file != "temp") {
                echo "<video controls src=\"$dir$file\" ></video>";

                $i++;
            }
        }
        ?>
    </div>


</body>