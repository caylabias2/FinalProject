<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login</title>

  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <script src="js/main.js"></script>

</head>

<body>
<div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="homepage.html"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
						<a class="nav-link" href="homepage.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#properties">Properties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
					 <li class="nav-item">
                        <a class="nav-link" href="register.html">Sign Up</a>
                    </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
  <main>
   <div class = "register-border"></div>
    <div class="container">
      <section class="section register-min-vh d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                  </div>
                  <form class="row g-3 needs-validation" action="check_login.php" method="post">
				          <div class="col-12">
                      <label for="yourUsername" class="form-label register-label">User Type</label>
                      <div class="input-group has-validation">
						            <select name="userttype" class="form-control" id="yourUsertype" >
                            <?php if (isset($_COOKIE["userttype"]))
                                  {
                                    $check_seller ="";
                                    switch($_COOKIE["userttype"]){
  
                                      case "":
                                        $check_seller ="selected";
                                        break;
       
                                      default:
                                      $check_seller ="selected";
                                       break;
                                    }
                                  }
                            
                            ?>
							              <option value="seller" <?php  echo $check_seller ?>>Seller</option>
					            	</select>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label register-label">Username</label>
                      <div class="input-group has-validation">              
                        <input type="text" name="username" class="form-control" id="yourUsername" value="<?php if (isset($_COOKIE["username"])) {
                            echo $_COOKIE["username"];
                        } ?>"  required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label register-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" value="<?php if (isset($_COOKIE["password"])) {
                          echo $_COOKIE["password"];
                      } ?>" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="register-button" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0 register-a">Register Now! <a href="register.html">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
	<div class = "register-border"></div>
  </main>
</body>

</html>