<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Animal list</h1>

    <?php


    $arrayAnimal = ['meo', 'cho', 'ga', 'heo', 'chim'];
    foreach ($arrayAnimal as $key => $animal) {


        if (($key + 1) % 2 === 0) {
            echo '<div style="color:red">' . $key + 1 . $animal . '</div>';
        } else {
            echo '<div style="color:blue">' . $key + 1 . $animal . '</div>';
        }
    }

    ?>



</body>

</html>