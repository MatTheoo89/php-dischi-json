<?php
    // Importo il db come stringa dal DB
        //$albumsString = file_get_contents('./dischi.json');

        //var_dump($albumsString);
    
    // decodifico la stringa in array associativo passando per variabile
        //$albums = json_decode($albumsString, true);
    
    // decodifico la stringa in array associativo senza variabile, ma direttamente qui
        $albums = json_decode(file_get_contents('./dischi.json'), true);
    
        //var_dump($_GET['albumIndex']);

        if (isset($_GET['albumIndex'])) {
            $albums = [
                "genre" => $albums[$_GET['albumIndex']]["genre"],
                "author" => $albums[$_GET['albumIndex']]["author"],
                "year" => $albums[$_GET['albumIndex']]["year"],
                "title" => $albums[$_GET['albumIndex']]["title"],
                "poster" => $albums[$_GET['albumIndex']]["poster"],
            ];
        }

    header('content-Type: applications/json');
    echo json_encode($albums);
