<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $parolaccia = $_POST['badword'];
        $testo = "Al polo sud non ci sono ne una foche ne un cervi";
        if($parolaccia=="foche"){
            $censura = "f***e";
        }elseif($parolaccia=="cervi"){
            $censura = "c***i";
        }
        $testo_censurato = str_replace($parolaccia, $censura, $testo);
    ?>
    <p>il testo è lungo <?php echo  strlen($testo_censurato); ?> caratteri</p>
    <p><?php echo  $testo_censurato; ?></p>
</body>
</html>