<?php
require_once __DIR__ . "/Models/Movie.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <header>
        <h1>
            Movie OOP
        </h1>
    </header>

    <main>

        <?php foreach ($movieList as $movie) { ?>
            <div class="card">
                <div class="title">
                    <h1>
                        Titolo:
                        <?php echo $movie->getTitle() ?>
                    </h1>
                </div>
                <div class="language">
                    <h2>
                        Lingua:
                        <?php echo $movie->getLanguage() ?>
                    </h2>
                </div>
                <div class="country">
                    <h3>
                        Paese:
                        <?php echo $movie->getCountry() ?>
                    </h3>
                </div>
                <div class="year">
                    <h4>
                        Anno:
                        <?php echo $movie->getYear() ?>
                    </h4>
                </div>
            </div>
        <?php } ?>
    </main>
</body>

</html>