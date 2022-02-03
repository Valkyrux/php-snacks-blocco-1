<?php
$products = [
    [
        "name" => "Nvidia RTX 3090 Founders Edition",
        "price" => "2934",
        "image" => "rtx3090.jpg",
        "category" => "scheda grafica"
    ],
    [
        "name" => "AMD RX 6900 XT",
        "price" => "2245",
        "image" => "rx6900.jpg",
        "category" => "scheda grafica"
    ],
    [
        "name" => "Intel 12900K",
        "price" => "945",
        "image" => "intelcpu.jpg",
        "category" => "processore"
    ],
    [
        "name" => "AMD Ryzen 9 5950X",
        "price" => "1045",
        "image" => "amdcpu.jpg",
        "category" => "processore"
    ],
    [
        "name" => "Spazzolino",
        "price" => "20",
        "image" => "spazzolino.jpg",
        "category" => "igiene"
    ],
];
$show_products = [];
if (!empty($_GET["category"]) && !empty($_GET["max-price"])) {
    if ($_GET["category"] == "all") {
        foreach ($products as $product) {
            if ($product["price"] <= (int) $_GET["max-price"]) {
                array_push($show_products, $product);
            }
        }
    } else {
        foreach ($products as $product) {
            if ($product["price"] <= (int) $_GET["max-price"] && $product["category"] === $_GET["category"]) {
                array_push($show_products, $product);
            }
        }
    }
} else if (!empty($_GET["category"]) && $_GET["category"] !== "all") {
    foreach ($products as $product) {
        if ($product["category"] === $_GET["category"]) {
            array_push($show_products, $product);
        }
    }
} else if (!empty($_GET["max-price"])) {
    foreach ($products as $product) {
        if ($product["price"] <= (int) $_GET["max-price"]) {
            array_push($show_products, $product);
        }
    }
} else {
    $show_products = $products;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php">
        <select name="category" id="category-select">
            <option value="all">Tutti</option>
            <option value="processore">Processore</option>
            <option value="scheda grafica">Scheda Grafica</option>
            <option value="igiene">Prodotti per l'igiene</option>
        </select>
        <input type="text" name="max-price">
        <button>Cerca</button>
    </form>
    <div>
        <?php
        foreach ($show_products as $product) : ?>
            <div style="width: 200px; text-align: center;">
                <img style="width: 100%;" src="<?= 'img/' . $product['image'] ?>" alt="">
                <h3><?= $product["name"] ?></h3>
                <h3><?= $product["price"] ?></h3>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>