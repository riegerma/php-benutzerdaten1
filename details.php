<!DOCTYPE html>
<head xmlns="http://www.w3.org/1999/html">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Benutzerdetails</title>



</head>
<body>
<div class="container">
    <h1 class="mt-5 mb-3">Benutzerdetails</h1>
    <a href="index.php">zurück</a>
    <div class="table table-striped">
        <table>
            <?php
            require "lib/PHP-13 userdata.php";
            getDataPerId($_GET['id']);
            ?>
        </table>
    </div>

</div>
</body>
