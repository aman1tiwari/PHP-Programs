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
    $marks = 40;

    if ($marks>=60)
    {
        $grade = "First Division";
    }
    elseif($marks>=45 && $marks<=59)
    {
        $grade = "Second Division";
    }
    elseif($marks>=33 && $marks<=44)
    {
        $grade = "Third Division";
    }
    else
    {
        $grade = "Fail";
    }
    
    echo "Student grade: $grade";

    ?>
</body>
</html>