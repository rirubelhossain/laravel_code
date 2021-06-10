<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Rubel</title>
</head>
<body>
    <h1>This all about Rubel</h1>
    <?php
    $counter = 0 ;
    var_dump($counter) ;
    var_dump($rubel_catch) ;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r($rubel_catch) ;
    foreach($rubel_catch as $me)
    {   
        ++$counter ;
        echo "The first name = ".$me->firstname ."<br>" ;
        echo "The Last name = ".$me->lastname ."<br>" ;
        echo "The Email is = ".$me->email ."<br>" ;
        echo "The Age is = ".$me->age ."<br>" ;
    }
    echo "the final result is = ".$counter ."<br>" ;
    ?>


</body>
</html>