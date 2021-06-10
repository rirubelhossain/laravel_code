<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>

    <h1>All post </h1>
    <?php echo "this data come from database ";?>
    @foreach($posts  as $variable)
        <h3>{{$variable->title}}</h3>
        <?php
        echo "this is title variable = ". $variable->title ;
        ?>
        <p>{{$variable->body}}</p>
    @endforeach

    <?php
    
    foreach($posts as $var )
    {
        echo "Inside the php = ". $var->title ." And " . $var->body ;
    }
    
    ?>


</body>
</html>


