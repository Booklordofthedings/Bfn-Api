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
        
     <?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>

      <div class="container">
        <br>

        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
          <strong>Version 0.1 Released: </strong>
          <button type="button" class="btn btn-info btn-sm">Read Patchnotes</button>
          <button type="button" class="close" data-dismiss="alert">
          <span>&times;</span>
          </button>
        </div>
        <br>

        <div class="row">
          <div class="col-12">
            <div class="jumbotron bg-dark">
              <h1 class="display-4">Welcome to the Funderdome !</h1>
              <p class="lead">This is a simple Website where you can acess peoples BfN statistics</p>
              <hr class="my-4">
              <p>It uses the BfB api to get and display your stats.
              </p>
              <p>There are several things you can do with theses stats,
                such as simply displaying, sharing, comparing or getting on the leaderboards.</p>
              <a class="btn btn-primary btn-lg shadow-none" href="#" role="button">Learn more</a>
            </div>
          </div>
        </div>

      <?php include $_SERVER['DOCUMENT_ROOT']."/modules/searchbar.php"; ?>
       
<!--
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-dark table-borderless table-hover">
                <thead>
                  <tr class="bg-primary">
                    <th scope="col">Character</th>
                    <th scope="col">Playtime</th>
                    <th scope="col">Score</th>
                    <th scope="col">PvP Vanquishes</th>
                    <th scope="col">Defeats</th>
                    <th scope="col">Assists</th>
                    <th scope="col">Revives</th>
                  </tr>
                </thead>
                <tr>
                  <th scope="row"><img src="res/Cactus.png" width="32px"></th>
                  <th scope="col">12h 14min</th>
                  <th scope="col">60000</th>
                  <th scope="col">256</th>
                  <th scope="col">156</th>
                  <th scope="col">700</th>
                  <th scope="col">50</th>
                </tr>
                <tr>
                  <th scope="row"><img src="res/Cactus.png" width="32px"></th>
                  <th scope="col">12h 14min</th>
                  <th scope="col">60000</th>
                  <th scope="col">256</th>
                  <th scope="col">156</th>
                  <th scope="col">700</th>
                  <th scope="col">50</th>
                </tr>
              </table>
            </div>
            
          </div>
        </div>
-->


    <?php include $_SERVER['DOCUMENT_ROOT']."/modules/footer.php"; ?>

      </div>

    <?php include $_SERVER['DOCUMENT_ROOT']."/modules/bootstrap_footer.php"; ?>
    
    </body>
</html>