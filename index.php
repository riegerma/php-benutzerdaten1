<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <title>Benutzerdaten</title>

    //<script type="text/javascript" src="js/index.js"></script>

</head>
<body>
<?php
$filter = '';
$suche = '';
?>


<div class="container">

    <h1 class="mt-5 mb-3">Benutzerdaten anzeigen</h1>


    <form id="userData" action="index.php" method="post">


        <div class="row">

            <div class="col-sm-12 form-group">

                <label for="suche">Suche:</label>

                <input id="suche"
                       type="text"
                       name="suche"

                       value="<?= htmlspecialchars($suche) ?>"
                />


                <input type="submit"
                       id="submit"
                       name="filter"
                       class="btn btn-primary"
                       value="Suchen"
                />


                <a href="index.php" class="btn btn-secondary">Leeren</a>


            </div>
        </div>
        <div class="col-sm-12 form-group">
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Geburtsdatum</th>
                </tr>
                <?php

                require "lib/PHP-13 userdata.php";

                if (isset($_POST['suche']) && $_POST['suche'] != "") {
                    getFilteredData($_POST['suche']);

                } else {
                    getAllData();

                }
                ?>

            </table>
        </div>

    </form>
</body>
</html>