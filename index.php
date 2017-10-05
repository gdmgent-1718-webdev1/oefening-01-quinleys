    <?php
    $naam = 'Quinten Leysen';
    $string1 = 'Hello';
    $string2 = 'World';
    $x = 10;
    $y = 7;  
    ?>
    
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Oefening 1</title>
</head>
<body>
<h1><?php echo 'Welkom ' . $naam; ?> </h1>
<p><?php echo $string1 . ' ' . $string2; ?> </p>
<p> <?php echo $x - $y ?> </p>
<p> <?php echo $x + $y ?> </p>
<p> <?php echo $x * $y ?> </p>
<p> <?php echo $x / $y ?> </p>
<p> <?php echo $x % $y ?> </p>
</body>
</html>