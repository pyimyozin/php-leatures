<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- The "switch case" statement is used to perform different actions based on different values of an expression. -->
    <?php
        $day = 3;
        $dayName = "";

        switch ($day) {
            case 1:
                $dayName = "Sunday";
                break;
            case 2:
                $dayName = "Monday";
                break;
            case 3:
                $dayName = "Tuesday";
                break;
            case 4:
                $dayName = "Wednesday";
                break;
            case 5:
                $dayName = "Thursday";
                break;
            case 6:
                $dayName = "Friday";
                break;
            case 7:
                $dayName = "Saturday";
                break;
            default:
                $dayName = "Invalid day";
        }
        
        echo "Today is $dayName";
        
    ?>
</body>
</html>