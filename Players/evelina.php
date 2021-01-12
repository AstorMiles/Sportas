<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
        <link href="../css/vtmcstat.css" rel="stylesheet">
        <title>Loreta</title>
    </head>
    <body>
        <?php
        $dvitaskiai=array(0,2,2,2,2,2,2,0);
        $pataike=array_count_values($dvitaskiai)[2];
        $nepataike=array_count_values($dvitaskiai)[0];
        $visodvit=count($dvitaskiai);
        ?>
        <h1>Dvitaškių statistika:</h1>
        <p>Žaidėjas metė dvitaškių: <?php echo $visodvit;?> </p>
        <p>Pataikė: <?php echo $pataike;?> </p>
        <p>Nepataikė: <?php echo $nepataike; ?> </p>
        <p>Žaidėjo pataikymo procentas: <?php echo round(100/$visodvit*$pataike,2);?>% </p>
        <hr>
                <?php
        $tritaskiai=array(3,3,3,0,0);
        $pataike=array_count_values($tritaskiai)[3];
        $nepataike=array_count_values($tritaskiai)[0];
        $visotrit=count($tritaskiai);
        ?>
        <h1>Tritaškių statistika:</h1>
        <p>Žaidėjas metė tritaškių: <?php echo count($tritaskiai); ?> </p>
        <p>Pataikė: <?php echo $pataike?> </p>
        <p>Nepataikė: <?php echo $nepataike ?> </p>
        <p>Žaidėjo pataikymo procentas: <?php echo round(100/$visotrit*$pataike,2)?>% </p>
        <br>
        <h2><a href="../vtmc.php">ATGAL</a></h2>
     </body>
</html>
