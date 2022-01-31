<?php
$rand_array = [];
$index = 0;
while ($index < 15) {
    $rand_value = rand(1, 100);
    if (!in_array($rand_value, $rand_array)) {
        array_push($rand_array, $rand_value);
        $index++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK 4</title>
</head>

<body>
    <?php
    var_dump($rand_array);
    ?>
</body>

</html>