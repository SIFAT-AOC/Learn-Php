<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter movie</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>filter movie which is released 2000 or hir</h1>


    <ul>
        <?php foreach ( $filteredByMovies as $movie)  :?>
        <li><?= $movie['name'] ?> release year (<?= $movie['year'] ?>) </li>
        <?php endforeach;?> 
    </ul>
</body>
</html>