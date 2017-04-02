<?php
    $data = file_get_contents("https://www.codeschool.com/users/GelaP.json"); //
    $json_data = json_decode($data, 1);
    $courses = $json_data['courses']['completed'];
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title><?= $json_data['user']['username']; ?>'s badges</title>
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>
    <header>
        <h1><?= $json_data['user']['username']; ?>'s badges</h1>
    </header>
    <div class="container">
        <div class="grid">
            <?php foreach ($courses as $course) :;?>
                <div class="grid-cell">
<!--                    <h2>--><?//= $course['title']; ?><!--</h2>-->
                    <img height="200px" src="<?= $course['badge']; ?>" alt="<?= $course['title']; ?>">
                    <br>
                    <a href="<?= $course['url']; ?>"><?= $course['title']; ?></a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>