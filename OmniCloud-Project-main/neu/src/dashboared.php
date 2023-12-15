<!--Write PHP to make a reusable component-->
<?php

//Get data from the php file and decode it
$serverData = file_get_contents("data.json");
$serverData = json_decode(json_encode($serverData), true);

echo $serverData


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
  </head>
  <body>
    <main class="container">
      <div class="container-margin-provisioning">
        <h2 class="dashboared-title">My Dashbaored</h2>
        <section class="dashboared-section-container">
          <div class="dashbaored-container">
            <p>Server ID</p>
            <div class="dashbaored-container-server-info">
              <!--diplay the for loop in the html-->
              <?php 
                //Loop through the data and make a reusable component

                echo "<div class='server-container'>";
                echo "<h3>" . $serverData['servers'][0]["type"] . "</h3>";
                echo "</div>";
              
              ?>
            </div>
          </div>
        </section>
      </div>
    </main>
  </body>
</html>
