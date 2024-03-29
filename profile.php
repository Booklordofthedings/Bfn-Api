<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Funderdome</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="/theme.css" >
        <script src="/script.js"></script>
        
    </head>
    <body class="bg-secondary text-primary">
        
    <!--include the modular header.php as a html file--->
    <?php include $_SERVER['DOCUMENT_ROOT']."/header.php"?>


    <div class="container">
        <br>

    <?php include $_SERVER['DOCUMENT_ROOT']."/modules/searchbar.php"; ?>


        <div class="card bg-dark">
            <div class="card-header"> <h3>About this website<h3> </div>
            <div class="card-body">
                <?php include $_SERVER['DOCUMENT_ROOT']."/api.php"; ?>
            </div>
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT']."/modules/bootstrap_footer.php"; ?>
    </body>
</html>