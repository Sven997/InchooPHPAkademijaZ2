<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadaca02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if (!isset($_POST['potvrdi'])) { ?>

<form action="index.php" method="POST" >

 Brojevi:   <input type="text" name="brojevi">
    <input type="submit" name="potvrdi">




</form>

 <?php

 } else {

    $brojevi_string = str_replace(" ", "", $_POST['brojevi']);
     $array_brojeva = explode(",", $brojevi_string);

    $parni_brojevi = [0,2,4,6,8];

    $parni_brojevi_final = [];



    foreach ($array_brojeva as $broj){
        if ( in_array( substr($broj, -1), $parni_brojevi ) ) {
            array_push($parni_brojevi_final, $broj);
        }
    }

    //var_dump($parni_brojevi);
   $sum = array_sum($array_brojeva) / count($array_brojeva);

    foreach ($parni_brojevi as $br){
        if($br > $sum){
            echo '<br>', $br, '<br>';
            break;
        }
    }




    ?>




 <?php }
?>



</body>
</html>