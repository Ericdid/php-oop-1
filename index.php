<?php

require_once __DIR__ . "/Models/movie.php";
require __DIR__ . "/Movie_data/Movie_db.php";

$movie_list= [];



foreach ($Movies_db as $movie) {
    $movie_list [] = new Movie ($movie ["title"],$movie ["genre"],$movie ["length"]);
};
// var_dump($movie_list);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>Prova Bootstrap</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum minima earum illo id laborum dolorum fugit
            assumenda? Reiciendis, tempora. Quidem ex velit adipisci doloremque sed eaque natus fuga quas dolores.</p>
    </div>

</body>

</html>