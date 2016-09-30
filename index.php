<?php 
    include("partials/head.php");
    include("partials/nav.php"); 
?>
    
    <!--  Image slider  -->
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- img 1  -->
        <div class="item active bg">
          <img src="img/bg/bg.jpg" alt="img slider" class="img-responsive">
          <div class="carousel-caption">
          </div>
        </div>

         <!-- img 2  -->

        <div class="item">
          <img src="img/bg/bg-1.jpg" alt="img slider" class="img-responsive">
          <div class="carousel-caption">
          </div>
        </div>

         <!-- img 3  -->

        <div class="item">
          <img src="img/bg/bg-2.jpeg" alt="img slider" class="img-responsive">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <!--  Latest   -->
    
        <div class="container">
         <h1 class="text-center text-uppercase main-title"><a id="btn-decrease" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>Latest<a id="btn-increase" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></h1>
        <div class="row">
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart center-block">
                    <img src="img/male/img-m-1.jpg" alt="img 1" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $99.99</i></a>
                    </div>
                </div>
                <h4 class="text-left">Men clothe 1</h4>
            </div>
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/male/img-m-13.jpg" alt="img 12" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $39.99</i></a>
                    </div>
                </div>
                <h4 class="text-left">Men clothe 12</h4>
            </div>
            <div class="col-md-4 text-center latest-item clearfix col-xs-12">
                <div class="add-to-cart">
                    <img src="img/male/img-m-3.jpg" alt="img 3" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $199.99</i></a>
                    </div>
                </div>
                <h4 class="text-left">Men clothe 3</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-1.jpg" alt="img 1" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> $79.00</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 1</h4>
            </div>
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-13.jpg" alt="img 13" class="img-responsive text-center center-block" />
                    <div class="price">
                        <a href="#"><i class="fa fa-cart-plus cart" aria-hidden="true"> 49.85</i></a>
                    </div>
                </div>
                <h4 class="text-left">Women clothe 13</h4>
            </div>
            <div class="col-md-4 text-center latest-item col-xs-12">
                <div class="add-to-cart">
                    <img src="img/female/img-w-18.jpg" alt="img 18" class="img-responsive center-block" />
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

<script>
document.title = "All New Fashion | Home";
</script>

</body>

</html>