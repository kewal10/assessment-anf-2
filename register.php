<?php 
    include("partials/head.php");
    include("partials/nav.php"); 
?>
    
<!--  Latest   -->
 <div class="container">
   <h5 class="f-s-c"><a id="btn-decrease" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>Font size contorller<a id="btn-increase" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></h5>
   
</div>
    <div class="container">
        <form id="userForm" class="form-horizontal">
            <fieldset class="form-title">
            <!-- Form Name -->
            <legend class="text-center">Register</legend>

            <!-- Full Name input-->
                <div class="form-group">
                  <label class="col-md-4 control-label sr-only" for="full_name"></label>  
                  <div class="col-md-6 col-md-offset-4">
                  <input id="full_name" name="fullName" type="text" placeholder="Full Name" class="form-control input-lg field">
                  </div>
                </div>

                <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-4 control-label sr-only" for="email"></label>  
                  <div class="col-md-6 col-md-offset-4">
                  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-lg">
                  </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label sr-only" for="password"></label>  
                  <div class="col-md-6 col-md-offset-4">
                  <input id="password" name="password" type="password" placeholder="Password" class="form-control input-lg">
                  </div>
                </div>

                <!-- Confirm Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label sr-only" for="confirm_password"></label>  
                  <div class="col-md-6 col-md-offset-4">
                  <input id="confirm_password" name="password2" type="password" placeholder="Confirm Password" class="form-control input-lg">
                  <span class="help-block"><a href="login.php" class="account">I have an account</a></span>  
                  </div>
                </div>

                <!-- Login Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label sr-only" for="login"></label>
                  <div class="col-md-4 col-md-offset-4">
                    <button id="login" name="login" type="submit" class="btn btn-default signin">Sign In</button>
                  </div>
                </div>
            </fieldset>
        </form>
    </div>
        
<?php 
    include("partials/footer.php"); 
?>