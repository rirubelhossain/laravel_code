<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Guest data</title>
</head>
<body>
    
    <h1> Here is the guest data </h1>
    <?php
    
    $counter = 0  ;
    foreach($guest as $key )
    {   
        ++$counter ;
        echo $key->firstname."<br>".$key->lastname ."<br>".$key->email."<br>" ;
    }
    echo "the counter value is = ".$counter ."<br>";
    ?>
    <?php
    

    ?>


</body>
</html>