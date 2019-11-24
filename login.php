<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>login</title>

<!-- Favicons Icon -->
<!--<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />

<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
-->
<link rel="icon" href="images/logo.png"   type="image/x-icon" />

<link rel="shortcut icon" href="./images/logo.png" type="image/x-icon" />
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>

<style>
#new
{
		border:1px solid black;
		float:left;
		margin-left:282px;
		
   -moz-box-shadow:    inset 0 0 15px red;
   -webkit-box-shadow: inset 0 0 15px red;
   box-shadow:         inset 0 0 15px red;
   
}
		

</style>
</head>

<body>

          <div class="col-2" id="new" style="">
		  <strong>Registered Customers</strong>
            <div class="content">
			<form action="./model/model_login.php" method="post">
              <p>If you have an account with us, please log in.</p>
              <ul class="form-list">
                <li>
                  <label for="email">User Id <span class="required">*</span></label>
                  <br>
                  <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="username">
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="password">
                </li>
              </ul>
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button id="send2" name="send" type="submit" class="button login"><span>Login</span></button>
               
				</form>
            </div>
          </div>
        </fieldset>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section>
  </span>
  <!--<footer class="footer wow bounceInUp animated">
     
  </footer>-->
  <!-- End Footer --> 
</div>


<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

</body>
</html>