<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All New Fashion | Contact us</title>

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
                <li><a href="contact-us.php?theme=mariner">Mariner</a></li>
                <li><a href="contact-us.php?theme=bluewood">Bluewood</a></li>
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
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                 <h3 class="contact faq">FAQ</h3>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="faq-q">
                          How long it take?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="faq-q-2">
                          Where is my package?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          simply dummy text of the printing?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <form id="userForm" class="form-horizontal">
                <fieldset class="form-title">
                <!-- Form Name -->
                <h3 class="contact text-left col-md-offset-2">Contact Us</h3>

                <!-- Full Name input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label sr-only" for="full_name"></label>  
                      <div class="col-md-8 col-md-offset-2">
                      <input id="full_name" name="fullName" type="text" placeholder="Full Name" class="form-control input-lg field">
                      </div>
                    </div>

                    <!-- Email input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label sr-only" for="email"></label>  
                      <div class="col-md-8 col-md-offset-2">
                      <input id="email" name="email" type="text" placeholder="Email" class="form-control input-lg">
                      </div>
                    </div>

                    <!-- Message input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label sr-only" for="message"></label>  
                      <div class="col-md-8 col-md-offset-2">
                      <textarea class="form-control" id="message" placeholder="Enter your message" name="your_message" class="form-control input-lg"></textarea>
                      </div>
                    </div>

                    <!-- Login Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label sr-only" for="login"></label>
                      <div class="col-md-8 col-md-offset-2">
                        <button id="login" name="login" class="btn btn-default send-message">Send Message</button>
                      </div>
                    </div>
                </fieldset>
            </form>
            </div>
        </div>
        
        <section class="container ">
            <div class="row s-info">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <h3 class="l-b">Our Location</h3>
                    <div id="map_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424145.8678079016!2d150.65179622143918!3d-33.847404026108755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x03017d681632a850!2sSydney+NSW!5e0!3m2!1sen!2sau!4v1466659815140" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                   <h3 class="v-o-f">Visit our Office</h3>
                    <address>
                      <strong>All New Fashion</strong><br>
                      1355 Market Street, Suite 900<br>
                      Sydney, NSW 2000<br>
                      <abbr title="Phone">P:</abbr> (02) 8888 8888
                    </address>

                    <address>
                      <strong>John Smith</strong><br>
                      <a href="mailto:#">support@allnewfashion.com.au</a>
                    </address>
                </div>
            </div>
        </section>

    
        <div class="footer contact-footer" id="footer">
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>