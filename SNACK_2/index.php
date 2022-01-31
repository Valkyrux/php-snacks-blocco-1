<?php
$check_result = "Accesso Negato";

if (!empty($_GET["name"]) && !empty($_GET["mail"]) && !empty($_GET["age"])) {
    $control_value = 0;
    // primo check
    if (strlen($_GET["name"]) > 3) {
        $control_value++;
    }
    // secondo check
    if (strpos($_GET["mail"], "@") !== false && strpos($_GET["mail"], ".") !== false) {
        $control_value++;
    }
    // terzo check
    if (is_numeric($_GET["age"])) {
        $control_value++;
    }
    // check dei chek
    if ($control_value === 3) {
        $check_result = "Accesso Riuscito";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK 2</title>
</head>

<body>
    <h1><?php echo $check_result ?></h1>
</body>

</html>