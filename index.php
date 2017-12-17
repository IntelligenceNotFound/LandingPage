<?php
  $title = "Applications | Intelligence Not Found";
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include 'scripts/head.php' ?>
  </head>
  <body>
    <div id="divContent" class="container-fluid">
      <h1 id="h1Title">Intelligence Not Found</h1>
      <h4 id="h4Subtitle"><i>Application Centre</i></h4>
      <br>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./projects.php'">Projects</button>

      <div id="divServices" class="card-deck container-fluid service">

        <!-- Nextcloud -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/services/nextcloud.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Nextcloud</h4>
            <p class="card-text">Access all of your personal files on our hosted file storage platform.</p>
          </div>
          <div class="card-footer">
            <a href="https://ucs.intelligencenotfound.com/nextcloud/" class="btn btn-primary">Login</a>
          </div>
        </div>

        <!-- OpenProject -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/services/openproject.png" alt="">
          <div class="card-body">
            <h4 class="card-title">OpenProject</h4>
            <p class="card-text">Complete work orders and manage Intelligence Not Found projects.</p>
          </div>
          <div class="card-footer">
            <a href="https://ucs.intelligencenotfound.com/openproject/" class="btn btn-primary">Login</a>
          </div>
        </div>

        <!-- Email -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/services/zoho.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Zoho Mail</h4>
            <p class="card-text">Check your Intelligence Not Found email account.</p>
          </div>
          <div class="card-footer">
            <a href="http://webmail.intelligencenotfound.com" class="btn btn-primary">Login</a>
          </div>
        </div>

      </div> <!-- End Services Wrapper div -->


    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted" style="color: white;">&copy; Intelligence Not Found 2017. Created by <a href="https://www.luketainton.co.uk">Luke Tainton,</a> part of the Intelligence Not Found team.</span>
      </div>
    </footer>
    <?php include 'scripts/footer.php' ?>
  </body>
</html>
