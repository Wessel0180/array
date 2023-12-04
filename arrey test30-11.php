<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lokalen Overzicht</title>
</head>
<body>

<?php
$lokalen = [
    [
        "nummer" => 2.073,
        "capaciteit" => 30,
        "vloer" => 2,
        "oppervlakte" => "20m2",
    ],
    [
        "nummer" => 1.050,
        "capaciteit" => 30,
        "vloer" => 1,
        "oppervlakte" => "20m2",
    ],
    [
        "nummer" => 1.073,
        "capaciteit" => 30,
        "vloer" => 1,
        "oppervlakte" => "20m2",
    ],
];
?>

<h2>Lokalen Overzicht</h2>
<ul>
    <?php foreach ($lokalen as $lokaal): ?>
        <li>
            <strong>Nummer:</strong> <?php echo $lokaal['nummer']; ?><br>
            <strong>Capaciteit:</strong> <?php echo $lokaal['capaciteit']; ?><br>
            <strong>Vloer:</strong> <?php echo $lokaal['vloer']; ?><br>
            <strong>Oppervlakte:</strong> <?php echo $lokaal['oppervlakte']; ?><br>
            <br>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
