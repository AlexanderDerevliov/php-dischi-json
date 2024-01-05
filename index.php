<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- style.css -->
    <link rel="stylesheet" href="./assets/css/style.css">
       <!-- axios -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue.js -->
       <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

    <div id="app">

        <header>
            <div class="my_header d-flex align-items-center">
            <img class="my_img" src="./assets/img/Spotify_logo_without_text.svg.webp" alt="">
            <h2>Spotybool</h2>
            </div>
            
        </header>

        <main>
            <div class="container pt-5">

                <div class="row g-5">

                    <div class="modal fade" :id="`N${disco.year}${i}`" tabindex="-1" :aria-labelledby="`${disco.year}${i}`" aria-hidden="true" v-for="(disco, i) in dischi" :id="`${disco.year}${i}`">

                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content content py-3 d-flex flex-column justify-content-center align-items-center">

                                <div class="wrapper-img d-flex ">
                                    <img class="img-fluid" :src="disco.poster" :alt="disco.author">
                                </div>

                                <h4>nome: {{disco.title}}</h4>
                                <h4>autore: {{disco.author}}</h4>
                                <h4>data: {{disco.year}} </h4>
                                <h4>genere: {{disco.genre}}</h4>


                            </div>
                        </div>

                    </div>

                    <div v-for="(disco, i) in dischi " class="col-12 col-md-6 col-lg-4">
                        <div class="card p-3 d-flex flex-column justify-content-center align-items-center" data-bs-toggle="modal" :data-bs-target="`#N${disco.year}${i}`" :id="`${disco.year}${i}`">

                            <div class="wrapper-img d-flex ">
                                <img class="img-fluid" :src="disco.poster" :alt="disco.author">
                            </div>

                            <h4>{{disco.title}}</h4>
                            <p>{{disco.author}}</p>
                            <h4>{{disco.year}}</h4>

                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>


    <!-- bootstrap.js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- script.js -->
    <script src="./assets/js/script.js"></script>
</body>

</html>