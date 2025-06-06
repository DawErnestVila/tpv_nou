<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPV - <?= $parameters["title"] ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body style="background-color: #f3f4f6;">
    <?php
    if (isset($parameters['userLogged']) && !empty($parameters['userLogged'])) {
        echo "User logged";
    } else {
        echo "User not logged";
    }
    ?>
    <?php echo $content ?>
</body>

</html>