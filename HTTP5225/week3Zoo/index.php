<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
</head>
<body>
    <h1>Zoo Challenge</h1>  

    <?php
        $breakfast = "Bananas, Apples, and Oats";
        $lunch = "Fish, Chicken, and Vegetables";
        $dinner = "Steak, Carrots, and Broccoli";
        //$hour = ('G');

        $randomHour = rand(0, 23);
        $randomMinute = rand(0, 59);
        $randomSecond = rand(0, 59);
        $hour = sprintf('%02d:%02d:%02d', $randomHour, $randomMinute, $randomSecond);
        echo $hour;
        
        if ($randomHour >= 5 && $randomHour < 9) {
            echo "<p>The animals are being fed breakfast: </p>" . $breakfast;
        }
        elseif($randomHour >= 12 && $randomHour < 14) {
            echo "<p>The animals are being fed lunch: </p>" . $lunch;        
        }
        elseif($randomHour >= 19 && $randomHour < 21) {
            echo "<p>The animals are being fed dinner: </p>" . $dinner;
        }
        else
        {
            echo "<p>The animals are not being fed</p>";
        }       

    ?>     
    
</body>
</html>