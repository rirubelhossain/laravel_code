<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user view</title>
</head>
<body>
    <h2>User Informations</h2>
    <h1>The user name is = {{$name}}</h1>

    <?php
    
    foreach($user as $key){
        echo $key ."<br>";
    }
    foreach($second as $ky)
    {
        echo $ky."<br>";
    }
    
    ?>

</body>
</html>