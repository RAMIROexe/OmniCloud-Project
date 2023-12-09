<?php 


$CPU = $_POST['CPU'];
$RAM = $_POST['RAM'];
$SSD = $_POST['SSD'];

$totalPrice = $CPU * 5 + $RAM * 5 + $SSD * 10;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <main class="container">
      <div class="container-margin">
        <head>
          <h1>OmniCloud</h1>
          <div class="head-description">
            <p>
              Lorem ipsum dolor sit amet consectetur. Morbi sed maecenas dui in
              nullam sed neque. Ornare porttitor nunc elementum cum quis tellus
              metus. Et egestas a turpis sed platea.
            </p>
            <div class="head-btn-container">
              <a href="dashboared.html" class="btn-my-dashboared"
                >Go to Dashboared</a
              >
              <a href="provisioning.html" class="btn-get-started"
                >Get Started</a
              >
            </div>
          </div>
        </head>
        <section class="our-customers">
          <h2>Our Customers</h2>
          <div class="customer-figures">
            <figure class="customer-figure">
              <img src="../public/logos/Meta.png" alt="Meta logo" />
              <p>
                “The best cloud service provider to host our Indian Call
                Centers.”
              </p>
            </figure>
            <figure class="customer-figure">
              <img src="../public/logos/Meta.png" alt="Meta logo" />
              <p>
                “The best cloud service provider to host our Indian Call
                Centers.”
              </p>
            </figure>
            <figure class="customer-figure">
              <img src="../public/logos/Meta.png" alt="Meta logo" />
              <p>
                “The best cloud service provider to host our Indian Call
                Centers.”
              </p>
            </figure>
          </div>
        </section>
        <section class="our-services">
          <h2>Our Services</h2>
          <div class="our-services-container">
            <div class="our-services-description">
              <p>
                Lorem ipsum dolor sit amet consectetur. Proin at id lectus
                sagittis gravida tellus. Nulla egestas a amet lacus. Nec
                dignissim eget non quis ac aliquam orci. Aliquam amet
                pellentesque tempor ac mauris.
              </p>
            </div>
            <p class="our-services-IaaS">IaaS</p>
          </div>
        </section>
        <section class="our-prices">
          <h2>Our Prices</h2>
          <div class="our-prices-container">
            <div class="our-prices-description">
              <p>
                Lorem ipsum dolor sit amet consectetur. Egestas pulvinar varius
                dui a quis proin ipsum consequat eu. Ut sed quis faucibus urna
                massa laoreet nisl laoreet. Maecenas eget faucibus eget ac. In
                aliquet placerat.
              </p>
            </div>
            <div class="our-prices-calculater">
              <form method="post" action="index.php" class="our-prices-text-fields">
                <!--First Text Field-->
                <div class="our-prices-text-field">
                  <div class="our-prices-text-field-container">
                    <label>CPU</label>
                    <input type="number" name="CPU" placeholder="1"/>
                  </div>
                  <p>5 CHF / Core</p>
                </div>
                <!--Second Text Field-->
                <div class="our-prices-text-field">
                  <div class="our-prices-text-field-container">
                    <label>RAM</label>
                    <input type="number" name="RAM" placeholder="1" />
                  </div>
                  <p>5 CHF / Core</p>
                </div>
                <!--Third Text Field-->
                <div class="our-prices-text-field">
                  <div class="our-prices-text-field-container">
                    <label>SSD</label>
                    <input type="number" name="SSD" placeholder="1" />
                  </div>
                  <p>5 CHF / Core</p>
                </div>
                <!--Submit Button-->
                <div>
                  <button class="our-prices-submit-button" type="submit">
                    Calculate
                  </button>
                </div>
              </form>
              <div class="our-prices-charge">
                <p>
                <?php echo $totalPrice ?>
                .-
              </p>
              </div>
            </div>
          </div>
        </section>
        <div class="cta-button-container">
          <button class="cta-button">Get Started</button>
        </div>
      </div>
    </main>
    <script src="script.js"></script>
  </body>
</html>