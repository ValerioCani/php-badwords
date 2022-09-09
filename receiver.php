<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $testo = $_POST['text'];
        $testo_censurato = str_replace("foca", "f**a", $testo);
    ?>
    
    <p><?php echo  $testo_censurato; ?></p>
</body>
</html>