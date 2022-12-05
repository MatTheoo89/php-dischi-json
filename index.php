<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Dischi JSON</title>
</head>
<body>

    <div class="" id="App">
        <header class="d-flex align-items-center">
            <img class="ms-4 h-75" src="./img/Spotify_Logo_RGB_Green-768x231.png" alt="Spotify_Logo">
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div
                    class="col-4 p-4">
                    <!-- v-for di dischi -->
                        <div class="my-card p-4">
                            <div class="image mb-3">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL. jpg" alt="">
                            </div>
                            <div class="info-text text-center">
                                <h4>Album</h4>
                                <span>artista</span>
                                <h5>anno</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>