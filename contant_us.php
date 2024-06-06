<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contant_us</title>
     <link rel="icon" type="image/svg+xml" href="img/axAsset 8.png">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta property="og:image" content="img/axAsset 8 (1).svg">
    <meta property="og:url" content="https://invoicefree.in">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="contant_us">
    <meta name="twitter:image" content="https://invoicefree.in/img/axAsset 8 (1).svg">
</head>
<style>
    @media (max-width: 768px) {
      .dropdown-menu { overflow-y: auto; max-height: 200px;
      }
      .navbar-header {
        float: none;
      }
      .navbar-toggle {
        display: block;
      }
      .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
      }
      .navbar-collapse.collapse {
        display: none!important;
      }
      .navbar-nav {
        float: none!important;
        margin: 7.5px -15px;
      }
      .navbar-nav>li {
        float: none;
      }
      .navbar-nav>li>a {
        padding-top: 9px !important;
        padding-bottom: 5px !important;
      }
      .navbar-collapse.collapse.in {
        display: block!important;
      }
      .collapsing {
        overflow: hidden!important;
      }
      .container11 {
        width: 50% !important;
        text-align: right;
      }
      .dropdown-menu .dropdown-title {
        margin-bottom: 10px;
        font-weight: bold;
      }
      .dropdown-column {
        margin-bottom: 10px;
        text-align: center;
      }
      .dropdown-column a {
        display: block;
        margin-bottom: 5px;
        color: #333;
        text-decoration: none;
      }
    }
    body.lightbox-open {
        overflow: hidden;
    }
    .gallery {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 999;
    text-align: center;
  }
  .lightbox-img {
      max-width: 80%;
      max-height: 80%;
      margin-top: 6%;
  }
  .close {
      color: #fff;
      font-size: 2em;
      position: absolute;
      top: 15%;
      right: 35%;
      cursor: pointer;
  }
  .dropdown-title {
  text-align: center;
  margin: 20px 0;
  }
  .dropdown-column {
  text-decoration: none;
  padding: 10px;
  }
  .dropdown-column a {
  display: block;
  text-decoration: none !important;
  margin: 10px 0;
  padding: 10px;
  color: #000; /* Change to your preferred color */
  border-radius: 4px;
  }
 
  .dropdown-column a:hover {
    text-decoration: underline !important;
    color: green;
}


  </style>
<body>
<?php include('nav.php'); ?>
    <br><br>
      <section id="contactus" class="cont1">
        <div class="container top2 cont">
          <div class="row">
            <div class="header-section text-center">
              <h2>Contact Us</h2>
              <p>All the user visiting the website can contact us any any time by sending their message </p>
              <p>We will do our best to solve your queries</p>
              <hr class="bottom-line">
            </div>
    
    
            <form action="contact.php" method="post">
              <div class="col-md-6 col-sm-6 col-xs-12 left">
                <div class="form-group">
                  <input type="text" name="recipient_name" id="recipient_name" class="form-control form"
                    placeholder="Your Name" />
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" />
                </div>
              </div>
    
              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                </div>
              </div>
    
              <div class="col-xs-12">
                <input type="submit" class="form contact-form-button light-form-button oswald light" name="submit"
                  value="Send message">
              </div>
            </form>
    
    
    
            <!--          MESSAGE FORM-->
    
    
          </div>
        </div>
      </section>
      <?php include('footer.php'); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>