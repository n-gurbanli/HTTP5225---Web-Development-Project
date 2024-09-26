<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
</head>
<body>
    <h1>The Magic Number Game</h1>  

    <?php
        
        $number = rand();
        echo $number;

        if ($number % 3 == 0) {
            echo "<p>The magic number is Fizz</p>";
        } 
        elseif($number % 5 == 0) {
            echo "<p>The magic number is Buzz</p>";
        }
        elseif($number % 3 == 0 && $number % 5 == 0) {
            echo "<p>The magic number is FizzBuzz</p>";
        }
        else {
            echo "<p>The magic number is </p>" . $number;
        }

    ?>     
    
</body>
</html>