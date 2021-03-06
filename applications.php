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
      <button type="button" class="btn btn-outline-light" style="background-color: white; color: black;" onclick="window.location.href='./'">Applications</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./projects.php'">Projects</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='./team.php'">Team</button>

      <div id="divServices" class="card-deck container-fluid service">

        <!-- GitHub -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/services/github.png" alt="">
          <div class="card-body">
            <h4 class="card-title">GitHub</h4>
            <p class="card-text">Access all project source code on GitHub's online Source Control Manager.</p>
          </div>
          <div class="card-footer">
            <a href="https://github.com/intelligenceNotFound" class="btn btn-primary">Go</a>
          </div>
        </div>

        <!-- Nextcloud -->
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="img/services/nextcloud.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Nextcloud <span class="badge badge-secondary">ADCM Cloud</span></h4>
            <p class="card-text">Access all of your personal files on our hosted file storage platform.</p>
          </div>
          <div class="card-footer">
            <a href="https://www.adcm.cloud" class="btn btn-primary">Login</a>
          </div>
        </div>
      </div> <!-- End Services Wrapper div -->


    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted" style="color: white;">&copy; Intelligence Not Found 2018. Created by <a href="https://www.luketainton.co.uk">Luke Tainton,</a> part of the Intelligence Not Found team. | Powered by ADCM Cloud</span>
      </div>
    </footer>
    <?php include 'scripts/footer.php' ?>
  </body>
</html>
