<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All New Fashion | Women 2</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,900,500' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet" type='text/css'>

     <?php
      if (isset($_GET['theme']))
      {
      ?>  
        <link rel="stylesheet" href="./css/theme_<?php echo $_GET['theme']?>.css">
      <?php
      }
      else
      {
        echo '<link rel="stylesheet" href="./css/main.css">';
      }
    ?>



</head>

<body>
    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">AFN</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="men-1.php">Men clothe 1</a></li>
                <li><a href="men-2.php">Men clothe 2</a></li>
              </ul>
            </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="women-1.php">Women clothe 1</a></li>
                <li><a href="women-2.php">Women clothe 2</a></li>
              </ul>
            </li>
            
             <li class="fb hidden-sm"><a href="#social_network" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             <li class="fb hidden-sm"><a href="#social_network" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
             <!-- <li><a href="#theme"></a>D</li> -->

               <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Theme<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="women-2.php?theme=mariner">Mariner</a></li>
                <li><a href="women-2.php?theme=bluewood">Bluewood</a></li>
              </ul>
          </ul>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php" class="sign-btn">Sign in</a></li>
<!--            <button type="button" class="btn btn-default navbar-btn"><a href="login.php">Sign in</a></button>-->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
    
    <!--  Latest   -->
     <div class="container">
       <h5 class="f-s-c"><a id="btn-decrease" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>Font size contorller<a id="btn-increase" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></h5>
    </div>
        <div class="container">
        <h1 class="text-center text-uppercase clothe-title">Women Clothe 2</h1>
        <div class="row">
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart center-block">
                    <img src="img/female/img-w-10.jpg" alt="img 10" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $99.99</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 10</h4>
            </div>
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-11.jpg" alt="img 11" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $39.99</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 11</h4>
            </div>
            <div class="col-md-4 text-center latest-item clearfix col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-12.jpg" alt="img 12" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $199.99</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 12</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-13.jpg" alt="img 13" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $79.00</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 13</h4>
            </div>
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-14.jpg" alt="img 14" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> 49.85</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 14</h4>
            </div>
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-15.jpg" alt="img 15" class="img-responsive center-block"/>
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $19.99</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 15</h4>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-16.jpg" alt="img 16" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $79.00</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 16</h4>
            </div>
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-17.jpg" alt="img 17" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> 49.85</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 17</h4>
            </div>
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-18.jpg" alt="img 18" class="img-responsive center-block"/>
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $19.99</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 18</h4>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="container">
            <div class="col-md-3 col-xs-12 text-center">
                <h3>About Us</h3>
                <hr />
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                <br> <a href="about_us.php">Read More</a></p>
            </div>
            <div class="col-md-3 col-xs-12 text-center">
                <h3>Quick Links</h3>
                <hr />
                <a href="contact-us.php"><h5>Help &amp; Contact<br></h5></a>
                <a href="#"><h5>Policies<br></h5></a>
                <a href="#"><h5>term and condition<br></h5></a>
                <a href="https://pixabay.com"><h5>All images form Pixabay<br></h5></a>
            </div>
            <div class="col-md-3 col-xs-12 text-center">
                <h3>Popular Categories</h3>
                <hr />
                <a href="men-1.php"><h5>Men<br></h5></a>
                <a href="women-1.php"><h5>Women<br></h5></a>
            </div>
            <div class="col-md-3 col-xs-12 text-center pull-left">
                <h3>Connect with Us</h3>
                <hr />
                <i class="fa fa-facebook-official fa-3x text-center"></i>
                <i class="fa fa-3x text-center fa-twitter-square"></i>
            </div>
        </div>
    </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>