<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
    <link rel="stylesheet" href="documents.css" type="text/css" />
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
            <a href="documents.php">Документы</a>
        </nav>
    </header>

    <div class="In">
    <ul>
        <?php
        $dir = "LrDOC/";
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                echo "<li><a href=\"$dir$file\" download>$file</a></li>";

            }
        }
        ?>
    </ul>
        <?php
        $dir = "LrPDF/";
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                echo "<embed src=\"$dir$file\" type=\"application/pdf\" width=\"100%\" height=\"600px\" />";

            }
        }
        ?>


    </div>


</body>