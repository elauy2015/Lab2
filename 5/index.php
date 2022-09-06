<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrimage.pngink-to-fit=no">
    <link href="../styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2</title>
</head>

<body>
    <div class="login-box">
        <h2>Problema 5</h2>
        <?php
        $name = $_GET["name"];
        $cal1 = $_GET["cal1"];
        $cal2 = $_GET["cal2"];
        $cal3 = $_GET["cal3"];
        $cal4 = $_GET["cal4"];
        $cal5 = $_GET["cal5"];

        $promedio = ($cal1 + $cal2 + $cal3 + $cal4 + $cal5) / 5;


        echo "<h2>Nombre del alumno:  $name</h2>";
        echo "<h2>Notas: $cal1,  $cal2,  $cal3, $cal4, $cal5 </h2>";
        echo "<h2>Promedio:  $promedio </h2>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>