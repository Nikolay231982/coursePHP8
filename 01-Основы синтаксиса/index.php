<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Урок-1</title>
</head>
<body>
<h1><?= "Заголовок первого уровня" ?></h1>
<p>Расширение файл имеет php</p>
<p>Существует 3 вида тэга которые указывают интерпретатору, что между этими тегами нужно интерпретировать как код
    php
</p>




<?php
    echo "Привет мир!";
?>

<div>
    <p><?= "Параграф" ?></p>
    <p>2+2 = <?php echo 2 + 2 ?></p>
</div>




</body>
</html>
