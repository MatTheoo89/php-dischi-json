<?php
    // Importo il db come stringa dal DB
        //$albumsString = file_get_contents('./dischi.json');

        //var_dump($albumsString);
    
    // decodifico la stringa in array associativo passando per variabile
        //$albums = json_decode($albumsString, true);
    
    // decodifico la stringa in array associativo senza variabile, ma direttamente qui
        $albums = json_decode(file_get_contents('./dischi.json'), true);
    
        // var_dump($albums);

    header('content-Type: applications/json');
    echo json_encode($albums);
