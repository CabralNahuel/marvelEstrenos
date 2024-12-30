<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

$result = file_get_contents(API_URL);

$data = json_decode($result, true);



?>

    
<main class="contenedor">
    <h1 class="h1Clase"><?= $data["title"];?></h1>
    <img src="<?= $data["poster_url"];?>" style="border-radius:16px; max-width:70%" alt="">    
    <p class="pClase"><?= $data["overview"];?></p>
    <h3 class="h3Clase"> coming soon in <?= $data["days_until"] ;?> days </h3>
    
</main>





<style>
    body{
        background: black;
    }
    .contenedor{
        display: grid;
        justify-items: center;
        padding: 0 3rem;
        height: 100%;
    }
    .h1Clase{
        color: whitesmoke;
        font-size: 3rem;
        align-self: self-end;
    }
    .h3Clase{
        color: whitesmoke;
        font-family:sans-serif;
        font-size: 2rem;

    }
    .pClase{
        color: wheat;
        font-family: serif;
        max-width: 90%;
        font-size: 2.5rem;

    }
</style>