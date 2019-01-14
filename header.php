<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/index_style.css">
  <link rel="stylesheet" href="css/mobaward.css">


  <title>Qoders - Route</title>
</head>
<body>


  <!-- H E A D E R  -->
  <header>
    <!-- T O P - N A V -->
    <div class="top-nav">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 border-right">
            <a id="search" href="#!"><i class="fas fa-search mr-4"></i></a>
            <a id="lang-switch" href="#!">ENGLISH</a>
          </div>
          <div class="col-md-8">
            <div class="nav-logo text-center">
              <a id="logo" href="index.php">Route.</a>
            </div>
          </div>
          <div class="col-md-1 offset-md-1 border-left">
            <div class="social-icons text-center">
              <a href="#!"><i class="fab fa-facebook-f"></i></a>
              <a href="#!"><i class="fab fa-twitter"></i></a>
              <a href="#!"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- T O P - N A V -->

    <!-- N A V - B  A R -->

    <div class="main-menu bg-light border-bottom">
      <div class="row no-gutters">
        <div class="col-md-8">
          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="winners.php">Winners</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nominees.php">Nominees</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="collections.php">Collections</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="professional.php">Professional Directory</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="jobs.php">Jobs & Talent</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ebooks.php">eBooks</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="conference.php">Conferences</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-md-4">
          <div class="nav-right">
            <div class="row no-gutters">
              <div class="offset-md-2 col-md-5">
                <a href="#login" class="btn main-menu-btn">
                  Register/Login
                </a>
              </div>
              <div class="col-md-5">
                <a href="submit.php" class="btn btn-info main-menu-btn">
                  Submit your site
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- N A V - B  A R -->

  </header>

  <!-- H E A D E R  -->



  <!-- Login Form  -->
  <div class="modal fade m-auto" id="login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form class="form-login login-form">
          <div class="box-content-login bg-white ">
            <div class="row">
              <div class="col-md-6">
                <h5>Sign in to continue</h5>
              </div>
            </div>
            <form class="login-form">
              <p class=" login-form-p">
                <input name="_username" class="text-input" placeholder="Email or Username" type="text"/>
              </p>
              <p class=" login-form-p">
                <input name="_password" class="text-input" placeholder="Password" type="password"/>
              </p>

              <p class=" login-form-p">
                <input class="login-check" id="remember" name="_remember" type="checkbox"/>
                <label>Keep me logged in</label>
              </p>
              <p class=" login-form-p">
                <button type="submit" class=" button text-input text-white"><span>Login now</span></button>
              </p>
              <div class="link m-auto text-center">
                <span>
                  <a href="#">Forgot Your Password</a>
                </span>
              </div>
              <p class="login-form-p">Or Sign In With</p>
              <div class="row ml-5 mr-5 mt-4">
                <div class="col-md-4">
                  <div class="link-social-google p-3 text-white text-center">
                    <a href="https://www.awwwards.com/about-evaluation/"><i class=" mr-1 fab fa-google-plus-g"></i>
                      <span>Google</span>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="link-social-twitter p-3 text-white text-center">
                    <a href="https://api.twitter.com/oauth/authenticate?oauth_token=JtdjMAAAAAAAyPCzAAABZ-Z5_sk"><i class=" mr-1 fab fa-twitter"></i>
                      <span>Twitter</span>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="link-social-face p-3 text-white text-center">
                    <a href="https://www.awwwards.com"><i class=" mr-1 fab fa-facebook-f"></i>
                      <span>FaceBook</span>
                    </a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- login Form  -->
