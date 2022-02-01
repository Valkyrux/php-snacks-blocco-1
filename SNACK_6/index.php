<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nomi</title>
</head>

<body>
    <div>
        <?php
        foreach ($db["teachers"] as $person) {
            echo "<div class='teachers'>" . $person["name"] . " " . $person["lastname"] . "</div>";
        }
        ?>
    </div>
    <div>
        <?php
        foreach ($db["pm"] as $person) {
            echo "<div class='pm'>" . $person["name"] . " " . $person["lastname"] . "</div>";
        }
        ?>
    </div>
</body>

</html>