<?php
$data = $_GET;
// $name = $_GET['parcheggio'];
$name = isset($_GET['parcheggio']) ? $_GET['parcheggio'] : '';


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container my-4">
        <h1 class="text-center">Elenco Hotel</h1>

        <!-- Versione base dell'esercizio -->
        <!-- <ul>
            <?php foreach ($hotels as $key => $hotel) : ?>
                <li class="my-4">
                    <h2><?php echo $hotel['name']; ?></h2>
                    <h4>Descrizione: <?php echo $hotel['description']; ?> </h4>
                    <h4>Parcheggio: <?php echo $hotel['parking']; ?></h4>
                    <h4>Voto: <?php echo $hotel['vote']; ?></h4>
                    <h4>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?></h4>
                </li>
            <?php endforeach; ?>
        </ul> -->

        <form action="index.php" method="GET" class="mt-3">
            <div class="d-flex flex-column ">
                <label for="parcheggio">Ricerca Hotel</label>
                <select name="parcheggio" id="parcheggio">
                    <!-- <option value="true">Con Parcheggio</option>
                    <option value="false">Senza Parcheggio</option> -->
                    <option value="true" <?php if ($name === 'true') echo 'selected'; ?>>Con Parcheggio</option>
                    <option value="false" <?php if ($name === 'false') echo 'selected'; ?>>Senza Parcheggio</option>
                </select>
                <div class="mt-3">
                    <button type="submit">Invio</button>
                    <button type="reset">Nuova ricerca</button>
                </div>
            </div>

        </form>

        <!-- Versione con Card di Bootstrap -->
        <div class="row">
            <?php foreach ($hotels as $key => $hotel) : ?>

                <?php if ($name === 'true' && $hotel['parking'] === true) : ?>
                    <div class="col-4 mt-4 ">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text"><?php echo $hotel['name']; ?></h4>
                                <p class="card-text"><strong>Descrizione:</strong> <?php echo $hotel['description']; ?></p>
                                <p class="card-text"><strong>Parcheggio:</strong> <?php echo $hotel['parking']; ?></p>
                                <p class="card-text"><strong>Voto:</strong> <?php echo $hotel['vote']; ?></p>
                                <p class="card-text"><strong>Distanza dal centro:</strong> <?php echo $hotel['distance_to_center']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    </div>
</body>

</html>