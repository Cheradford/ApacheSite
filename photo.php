
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
    <link rel="stylesheet" href="photo.css" type="text/css" />
    <script src="Scripts/script.js"></script>
</head>

<body>
    <header>
        <a href="index.html"><img src="Resources\Logo.svg" /></a>
        <nav>
            <a href="index.html#AboutMe">Про меня</a>
            <a href="index.html#Reasons">Смысл жизни</a>
            <a href="index.html#WhereAmI">Контакты</a>
            <a href="photo.html">Фотоальбом</a>
        </nav>
    </header>
    <div class="buttons">

        <button onclick="SetVisible('In', 'Out')">Оригинальные изображения</button>
        <button onclick="SetVisible('Out', 'In')">Обработанные изображения </button>
    </div>
    <div class="In">
        <?php
        $dir = "PhotoIn/";
        $files = scandir($dir);
        $i = 0;
        foreach($files as $file) {
          if ($file != "." && $file != ".." && $i < 50) {
            echo "<img src=\"$dir$file\">";
            $i++;
          }
        }
      ?>
    </div>
    <div class="Out">
      <?php
        $dir = "PhotoOut/";
        $files = scandir($dir);
        $i = 0;
        foreach($files as $file) {
          if ($file != "." && $file != ".." && $i < 50) {
            echo "<img src=\"$dir$file\">";
            $i++;
          }
        }
      ?>
    </div>

</body>