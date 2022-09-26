<?php
$answer = 5;
$price = 10.99;
$title = 'This is variable usage lesson in PHP, it\'s fun';
$author = "Anderson";
$description = 'This is a general use of variable and,
how to embed it to html';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/exercises.css">
    <title>Using Variables in PHP</title>
   
    
    
</head>
<body>
    <h1>Editor's Choice</h1>
    <p>This week's recommended reading</p>
    <h2>Book Title: <?php echo "$title" ;?></h2>
    <p class="author"><?php echo "By $author" ;?></p>
    <p>Decription: <?php echo  $description. " " . $answer ;?></p>
    <p>Price <?php echo ": $" .$price ;?></p>
</body>
</html>
