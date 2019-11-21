<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <script src="https://kit.fontawesome.com/c8243a3617.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Basler Screen Printing | The BEST screen printing services in St. Louis. Period.</title>
</head>

<body class="d-flex flex-column">

  <!-- Header Section Start -->

  <section id="home">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark main-nav shadow fixed-top">
        <div class="container">
          <span class="navbar-brand mb-0 h1">Basler Screen Printing</span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="header-image shadow">
      <div class="container h-100 header-text-container">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h1 class="header-text display-1 animated fadeInDown">Basler Screen Printing</h1>
          </div>
        </div>
      </div>
      <div class="color-overlay">
      </div>
    </div>

    <div class="header-section-p">
      <h5>Basler Screen Printing is a full-service screen printing company based in St. Louis, Missouri. <br><br> We pride ourselves on providing our customers with the best custom-printed products for their needs. <br><br> Come and check out what
        we have to offer and prepare to be blown away!</h5>

    </div>

  </section>

  <!-- Header Section End -->

  <!-- Services Section Start -->

  <section class="services-section" id="services">
    <div class="services-section-title">
      <div class="headingLine"></div>
      <h2>What We Do.</h2>
      <div class="headingLine"></div>
    </div>
    <div class="section-p">
      <p>Are you a musician who's band needs T-Shirts to sell as merchandise for the next multi-city tour run? <br> <br> Perhaps you're a business owner who needs her company's logo custom printed on hoodies for an outdoor event in the fall. <br> <br> Or
        maybe you're a graphic artist who would simply love to see his latest design on a custom drink koozie! <br> <br> Whatever your screen printing needs are, Basler Screen Printing offers excellent service and print jobs on an assortment of items.</p>

    </div>
    <div class="container">
      <div class="card-deck hidden">
        <div class="card text-center shadow">
          <img src="images/tshirt.svg" class="card-img-top" alt="t shirt">
          <div class="card-body">
            <h5 class="card-title">T-Shirts</h5>
          </div>
          <div class="card-footer">
          </div>
        </div>
        <div class="card text-center shadow">
          <img src="images/hoodie.svg" class="card-img-top" alt="hoodie">
          <div class="card-body">
            <h5 class="card-title">Hoodies</h5>
          </div>
          <div class="card-footer">
          </div>
        </div>
        <div class="card text-center shadow">
          <img src="images/jacket.svg" class="card-img-top" alt="jacket">
          <div class="card-body">
            <h5 class="card-title">Jackets</h5>
          </div>
          <div class="card-footer">
          </div>
        </div>
        <div class="card text-center shadow">
          <img src="images/soft-drink.svg" class="card-img-top" alt="soft drink can">
          <div class="card-body">
            <h5 class="card-title">Koozies</h5>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Services Section End -->

  <!-- About Section Start -->

  <section class="about-section" id="about">
    <div class="about-section-title">
      <div class="headingLine"></div>
      <h2>Meet Matt Basler.</h2>
      <div class="headingLine"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm matt-image-div text-center">
          <img src="images/matt.jpg" class="matt-image img-fluid" alt="Matt Basler">
        </div>
        <div class="col-sm about-text">

          <p>Hey! I'm Matt F Basler, owner of Basler Screen Printing. <br> <br> I started screen printing in 2012 in my garage as a way to make merchandise for my band and slowly grew the business to where it is now. <br> <br> Based in South St.
            Louis City, I'm dedicated to bringing quality t-shirts to bands, businesses, and everything in between.</p>
        </div>
      </div>
    </div> 62216

    <!-- Mailing List Start -->

    <div class="container mailing-list" id="mailing-list">
      <div class="row justify-content-center">
        <div class="col">
          <div class="card text-center shadow">
            <div class="card-header">
              Join our mailing list
            </div>
            <div class="card-body">
              <h5 class="card-title">Be the first to know about pricing deals!</h5>
              <p class="card-text">Get all of the latest info on discounts, specials and new products and services.</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listModal">
                Sign Up
              </button>
            </div>
            <div class="card-footer text-muted">

              <?php
               $statusMsg = !empty($_SESSION['listmsg'])?$_SESSION['listmsg']:'';
               unset($_SESSION['listmsg']);
               echo $statusMsg;
              ?>

            </div>
          </div>
        </div>
      </div>

      <!-- Mailing List End -->

      <!-- Mailing List Pop-Up Modal Start -->

      <div class="modal fade" id="listModal" tabindex="-1" role="dialog" aria-labelledby="listModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Mailing List Sign-Up Form</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="text-center">
                  <img class="mailchimp-icon" src="images/mailchimp-freddie-icon.svg" alt="Mailchimp">
                  <h6>Powered-by Mailchimp</h6>
                </div>

                <div class="text-center">

                  <form id="list-form" class="needs-validation" action="list.php" method="post" novalidate>

                      <div class="form-group">
                        <label for="fname"></label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
                      </div>

                      <div class="form-group">
                        <label for="lname"></label>
                        <input type="text" class="form-control" id="lname" name="fname" placeholder="Last name">
                      </div>

                      <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="listemail" name="email" placeholder="Enter your email" required>
                        <div class="invalid-feedback"> Please enter a valid email address.</div>
                      </div>

                      <button type="submit" class="btn btn-primary" name="button">Join</button>

                  </form>

                </div>

              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mailing List Pop-Up Modal End -->

  </section>

  <!-- About Section End -->

  <!-- Contact Section Start -->

  <section class="contact-section" id="contact">
    <div class="contact-section-title">
      <div class="headingLine"></div>
      <h2>Ready for some shirts?</h2>
      <h2>Let's get in touch!</h2>
      <div class="headingLine"></div>

    </div>
    <div class="container">

      <div class="row">

        <div class="col-sm text-center">
          <h3>Message Us</h3>

          <?php
           $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
           unset($_SESSION['msg']);
           echo $statusMsg;
          ?>

          <form id="contact-form" class="needs-validation" action="mail.php" method="post" novalidate>
            <div class="form-group">
              <label for="email"></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
              <div class="invalid-feedback"> Please enter a valid email address.</div>
            </div>
            <div class="form-group">
              <label for="name"></label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Name">
              <div class="invalid-feedback"> Please enter your name.</div>
            </div>
            <div class="form-group">
              <label for="subject"></label>
              <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
              <div class="invalid-feedback"> Please enter a subject for your message.</div>
            </div>
            <div class="form-group">
              <label for="message"></label>
              <textarea name="message" class="form-control" id="message" placeholder="Message" rows="8" cols="80" required></textarea>
              <div class="invalid-feedback"> Please enter your message.</div>
            </div>
            <!-- <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div> -->

            <button type="submit" class="btn btn-primary" name="button">Submit</button>
          </form>
        </div>

        <div class="col-sm text-center">
          <h3 class="visit-heading">Visit Us</h3>
          <div id="map"></div>
          <div class="address-area">
            <address>
              <i class="fas fa-map-marked-alt"></i>
              <h6>Address:</h6>
              <p>3739 South Jefferson Avenue</p>
              <p>St Louis, Missouri, 63118</p>
              <i class="fas fa-clock"></i>
              <h6>Hours:</h6>
              <p>Monday - Friday: 11am to 4pm</p>
              <p>Saturday and Sunday: CLOSED</p>
              <i class="fas fa-phone"></i>
              <h6>Phone:</h6>
              <p>(314) 669-5535</p>
            </address>
          </div>
          <div class="social-area">
            <a href="https://www.facebook.com/BaslerScreenPrinting/" target="_blank"><img class="social-icons" src="images/facebook.svg" alt="facebook icon"></a>
            <a href="https://www.instagram.com/basler_screen_printing/" target="_blank"><img class="social-icons" src="images/instagram.svg" alt="instagram icon"></a>

          </div>
        </div>
      </div>

  </section>

  <!-- Contact Section End -->

  <!-- Footer Start -->

  <section>
    <footer class="container-fluid footer">
      <div class="footer-content text-center">
        <p>Copyright <?php echo date("Y"); ?> | Basler Screen Printing <br>
          Site designed by <a href="http://www.dominiquethedeveloper.com/" target="_blank">Dominique The Developer</a></p>
      </div>

    </footer>
  </section>

  <!-- Footer End -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
  <script src="js/scripts.js" type="text/javascript"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=APIKEY&callback=initMap">
  </script>


</body>

</html>
