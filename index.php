<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" class="href">
    <script src="Js/basic.js"></script>
  </head>
  <body>
    <aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="https://thumbs.dreamstime.com/b/creative-geometric-logo-sign-orange-pink-gradient-letter-m-your-company-207530185.jpg" alt="">
        <div class="info">
          <h3><a href="#">Citizen bank</a></h3>
          <p>Your transaction made easy.</p>
        </div>
      
      <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i> &emsp;<a href="#"> Dashboard</a>
        
        </li>
        <li><i class="fa fa-money fa-fw"></i>&emsp;<a href="TransferMoney.php">Money Transfer</a>
      
        </li>
        <li><i class="fa fa-history fa-fw"></i>&emsp;<a href="TransactionHistory.php">Transaction History</a>
        
        </li>
      </ul>
    </aside>

    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><p class="main-color">Dashboard</p></a>
          </div>
  
        </div>
      </nav>

      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h2>Our Services</h2>
                <p>To provide you with the best banking experience</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <section class="statistics">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
            <a href="TransferMoney.php">
              <div class="box">
                <i class="fa fa-money fa-fw inf"></i>
                <div class="info">
                  <h3 a href="TransferDetails.php">Transfer Money</h3>
                  <p>Fast, safe and easy transaction</p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="TransactionHistory.php"> 
              <div class="box">
                <i class="fa fa-history fa-fw danger"></i>
                <div class="info">
                  <h3 a href="TransactionHistory.php">View Transactions</h3>
                  <p>check out transaction history</p>
                </div> 
              </div>
              </a>
            </div>
            <div class="col-md-4">
            <a href="#">
              <div class="box">
                <i class="fa fa-user fa-fw success"></i>
                <div class="info">
                  <h3 a href="#">New User</h3>
                  <p>Are you a new user? Register here.</p>
                </div>
              </div>
            </div>
              </a>
          </div>
        </div>
  </section>

  <section class="statistics">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
            <a href="#">
              <div class="box">
                <i class="fa fa-exchange fa-fw success"></i>
                <div class="info">
                  <h3 a href="#">Investments</h3>
                  <p>Safe and potential investment</p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#"> 
              <div class="box">
                <i class="fa fa-credit-card fa-fw inf"></i>
                <div class="info">
                  <h3 a href="#">Finance</h3>
                  <p>Professional financial platform</p>
                </div> 
              </div>
              </a>
            </div>
            <div class="col-md-4">
            <a href="#">
              <div class="box">
                <i class="fa fa-font-awesome fa-fw danger"></i>
                <div class="info">
                  <h3 a href="#">Offers</h3>
                  <p>Deals for you</p>
                </div>
              </div>
            </div>
              </a>
          </div>
        </div>
  </section>

  <!-- Copyright -->
  <div class="text-center" style="margin-top: 285px; text-align: center; font-size:12px;">
  <style>
    .text-center{
      color: grey;
    }
  </style>
    ©2021 CitizenBank. All rights reserved.  
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>