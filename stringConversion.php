<?php
$city = 'London';
$cityToUpper = strtoupper($city); //converts string to Uppercase


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/exercises.css">
    <title>Manipulating values</title>
</head>
<body>
    
<h1>Using Functions</h1>
<p><span class="label">Original value:</span> <?php echo $city; ?></p>
<p><span class="label">Uppercase:</span>      <?php echo $cityToUpper; ?></p>
<p><span class="label">Original value:</span> <?php echo $city; ?></p>
</body>
</html>
