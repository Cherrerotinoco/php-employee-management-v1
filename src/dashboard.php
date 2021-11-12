<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <?php
    require_once("../assets/html/head.html")
    ?>

    <title>Employee dashboard</title>
</head>

<body>
    <header>
        <?php
        require_once("../assets/html/header.html")
        ?>
    </header>

    <main>
        <div id="jsGrid" class="mt-5 container"></div>

    </main>

</body>

</html>