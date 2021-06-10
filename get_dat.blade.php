<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Migrations</title>
</head>
<body>

    <?php
    $count = 0 ;
    foreach($receive_variable as $a )
    {   
        ++$count ;
        echo $a->migration ."<br>";
    }
    echo "The total number of table = ".$count ;
    ?>

</body>
</html>