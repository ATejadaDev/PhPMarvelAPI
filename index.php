<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);


?>

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="La proxima pelicula de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <style>
    :root {
        background-color: #09122C;
    }

    body {
        display: grid;
        place-content: center;
    }
    img {
        margin: 0 auto;
    }
    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup, a {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    h3, p {
        color: white;
    }
    h4 {
        color: aqua;
    }
</style>
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"] ?>" width="300" alt="Poster de <?= $data["title"] ?>" />
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <h4>La siguiente es: <?= $data["following_production"]["title"]; ?></h4>
    </hgroup>

    <a href="https://github.com/ATejadaDev/PhPMarvelAPI/blob/main/index.php" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" 
         width="300" height="300" alt="Github">
    </a>

</main>