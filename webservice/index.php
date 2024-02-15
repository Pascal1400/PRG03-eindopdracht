<?php
//Require functions for actions
require_once "includes/actions.php";

//Based on the existence of the GET parameter, 1 of the 2 functions will be called
if (!isset($_GET['id'])) {
    $data = getMovies();
} else {
    $data = getMovieDetails($_GET['id']);
}

//Set the header & output JSON so the client will know what to expect.
header("Content-Type: application/json");
echo json_encode($data);
exit;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upcoming movie magazine</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="application/javascript" src="js/main.js" defer></script>
</head>
<body>
<header>
    <nav>
        <a href="#">about</a>
        <img src="" alt="Logo">
        <a href="#">IMDb</a>
    </nav>
</header>
<main>
    <h1>Top upcoming movies</h1>
    <section>
        <div>
            <div>
                <img src="" alt="foto film">
            </div>
            <div>
        </div>
                <h2>Film name</h2>
                <p>Release date</p>
            </div>
        <div>
            <div>
                <p>Description</p>
            </div>
            <ul>
                <li>Genres:</li>
                <li>...</li>
            </ul>

        </div>
    </section>
</main>
<footer>
    <img src="" alt="Logo">
</footer>
</body>
</html>
